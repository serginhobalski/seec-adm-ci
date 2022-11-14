<?php

namespace App\Models;

use CodeIgniter\Model;

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
}
