<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Libraries\Token;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'App\Entities\Usuario';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'local',
        'login',
        'email',
        'telefone',
        'password_hash',
        'reset_hash',
        'reset_expira_em',
        'ativo',
        'imagem',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'criado_em';
    protected $updatedField  = 'alterado_em';
    protected $deletedField  = 'deletado_em';

    // Validation
    protected $validationRules      = [
        'nome' => 'required',
        'login' => 'required|is_unique[usuarios.login,id{id}]',
        // 'email' => 'valid_email',
        'password' => 'required',
        'password_confirmation' => 'required_with[password]|matches[password]',
    ];
    protected $validationMessages   = [
        'nome' => [
            'required' => 'O campo Nome é obrigatório',
        ],
        'login' => [
            'required' => 'O campo Login é obrigatório',
            'is_unique' => 'Este login já está em uso. Favor escolher outro.',
        ],
        'password_confirmation' => [
            'required_with' => 'O Confirmar Senha é obrigatório e precisa ser igual á Senha.',
        ],
    ];


    // Callbacks
    protected $beforeInsert   = ['hashPassword'];
    protected $beforeUpdate   = ['hashPassword'];

    protected function hashPassword(array $data)
    {
        if (isset($data['data']['password'])) {

            $data['data']['password_hash'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);

            unset($data['data']['password']);
            unset($data['data']['password_confirmation']);
        }

        return $data;
    }

    /**
     * Método que recupera o email do usuário para resetar a senha
     *
     * @param string $email
     * @return null|object
     */
    public function buscaUsuarioPorEmail(string $email)
    {
        return $this->where('email', $email)->where('deletado_em', null)->first();
    }

    /**
     * Método que recupera o usuário para logar na aplicação
     *
     * @param string $login
     * @return null|object
     */
    public function buscaUsuarioPorLogin(string $login)
    {
        return $this->where('login', $login)->where('deletado_em', null)->first();
    }

    public function recuperaPermissoesDoUsuarioLogado(int $usuario_id)
    {
        $atributos = [
            // 'usuarios.id',
            // 'usuarios.nome AS usuario',
            // 'grupos_usuarios.*',
            'permissoes.nome AS permissao',
        ];

        return $this->select($atributos)
            ->asArray() // Recuperamos no formato array
            ->join('grupos_usuarios', 'grupos_usuarios.usuario_id = usuarios.id')
            ->join('grupos_permissoes', 'grupos_permissoes.grupo_id = grupos_usuarios.grupo_id')
            ->join('permissoes', 'permissoes.id = grupos_permissoes.permissao_id')
            ->where('usuarios.id', $usuario_id)
            ->groupBy('permissoes.nome')
            ->findAll();
    }

    /**
     * Método que recupera o usuário de acordo com o hash do token.
     *
     * @param string $token
     * @return null|object
     */
    public function buscaUsuarioParaRedefinirSenha(string $token)
    {

        // Instanciando o objeto da classe, passando como parâmetro no contrutor o $token
        $token = new Token($token);


        // Recuperando o hash do token
        $tokenHash = $token->getHash();


        // Consultando na base o usuário de acordo com hash
        $usuario = $this->where('reset_hash', $tokenHash)
            ->where('deletado_em', null)
            ->first();


        // Validamos se o usuário foi encontrado
        if ($usuario === null) {
            return null;
        }


        // Validamos se o token ainda é valido (não expirou)
        if ($usuario->reset_expira_em < date('Y-m-d H:i:s')) {
            return null;
        }


        // Nesse ponto, está tudo certo. Usuário existe e o token é válido
        return $usuario;
    }
}
