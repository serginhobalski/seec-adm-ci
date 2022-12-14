<?php

namespace App\Libraries;

class Autenticacao
{

    private $usuario;
    private $usuarioModel;
    private $grupoUsuarioModel;

    public function __construct()
    {
        $this->usuarioModel =  new \App\Models\UsuarioModel();
        $this->grupoUsuarioModel =  new \App\Models\GrupoUsuarioModel();
    }

    /**
     * Método que realiza o login na aplicação
     *
     * @param string $login
     * @param string $password
     * @return boolean
     */
    public function login(string $login, string $password): bool
    {

        // Buscamos o usuário
        $usuario = $this->usuarioModel->buscaUsuarioPorLogin($login);

        if ($usuario === null) {

            // exit('Usuário não encontrado');

            return false;
        }

        if ($usuario->verificaPassword($password) == false) {

            // exit('Senha incorreta');

            return false;
        }

        if ($usuario->ativo == false) {

            // exit('Usuário inativo');

            return false;
        }

        $this->logaUsuario($usuario);

        return true;
    }

    /**
     * Método de logout
     *
     * @return void
     */
    public function logout(): void
    {
        session()->destroy();
    }

    public function pegaUsuarioLogado()
    {

        if ($this->usuario === null) {


            $this->usuario = $this->pegaUsuarioDaSessao();
        }

        return $this->usuario;
    }

    /**
     * Método que verifica se o usuário está logado
     *
     * @return boolean
     */
    public function estaLogado(): bool
    {

        return $this->pegaUsuarioLogado() !== null;
    }

    // ----------------Métodos Privados-------------------------//

    /**
     * Método que insere na sessão o ID do usuário
     *
     * @param object $usuario
     * @return void
     */
    private function logaUsuario(object $usuario): void
    {

        $session = session();

        //$session->regenerate(); // <--- NÃO USEM ESSE MÉTODO DA CLASSE SESSION. Nos testes que eu fiz, ele remove da sessão o 'usuario_id', quando há o redirect

        $_SESSION['__ci_last_regenerate'] = time(); // UTILIZEM essa instrução que o efeito é o mesmo e funciona perfeitamente.

        $session->set('usuario_id', $usuario->id);
    }

    /**
     * Método que recupera da sessão e valida o usuário logado
     *
     * @return null|object
     */
    private function pegaUsuarioDaSessao()
    {

        if (session()->has('usuario_id') == false) {

            return null;
        }

        // Busco usuário na base de dados
        $usuario = $this->usuarioModel->find(session()->get('usuario_id'));


        // Validamos se o usuario existe e se tem permissão de login na aplicação
        if ($usuario == null || $usuario->ativo == false) {

            return null;
        }


        // Definimos as permissões do usuário logado
        $usuario = $this->definePermissoesDoUsuarioLogado($usuario);


        // Retornamos o objeto $usuario
        return $usuario;
    }

    /**
     * Método que verifica se o usuário logado (session()->get('usuario_id')) está associado ao grupo de admin
     *
     * @return boolean
     */
    private function isAdmin(): bool
    {

        // Definimos o ID do grupo admin.
        // Não equeçam que esse ID jamais poderá ser alterado.
        // Por isso, nós defendemos no controller
        $grupoAdmin = 1;

        // Verificamos se o usuário logado está no grupo de administrador
        $administrador = $this->grupoUsuarioModel->usuarioEstaNoGrupo($grupoAdmin, session()->get('usuario_id'));


        // Verificamos se foi encontrado o registro
        if ($administrador == null) {

            return false;
        }

        // Retornamos true, ou seja, o usuário logado faz parte do grupo admin
        return true;
    }

    /**
     * Método que verifica se o usuário logado (session()->get('usuario_id')) está associado ao grupo de clientes
     *
     * @return boolean
     */
    private function isUetp(): bool
    {

        // Definimos o ID do grupo UETP.
        // Não equeçam que esse ID jamais poderá ser alterado.
        // Por isso, nós defendemos no controller
        $grupoUetp = 2;

        // Verificamos se o usuário logado está no grupo UETP
        $uetp = $this->grupoUsuarioModel->usuarioEstaNoGrupo($grupoUetp, session()->get('usuario_id'));


        // Verificamos se foi encontrado o registro
        if ($uetp == null) {

            return false;
        }

        // Retornamos true, ou seja, o usuário logado faz parte do grupo uetp
        return true;
    }

    /**
     * Método que verifica se o usuário logado (session()->get('usuario_id')) está associado ao grupo de professores
     *
     * @return boolean
     */
    private function isProfessor(): bool
    {

        // Definimos o ID do grupo Professor.
        // Não equeçam que esse ID jamais poderá ser alterado.
        // Por isso, nós defendemos no controller
        $grupoProfessor = 3;

        // Verificamos se o usuário logado está no grupo Professor
        $professor = $this->grupoUsuarioModel->usuarioEstaNoGrupo($grupoProfessor, session()->get('usuario_id'));


        // Verificamos se foi encontrado o registro
        if ($professor == null) {

            return false;
        }

        // Retornamos true, ou seja, o usuário logado faz parte do grupo professor
        return true;
    }

    /**
     * Método que verifica se o usuário logado (session()->get('usuario_id')) está associado ao grupo de alunos
     *
     * @return boolean
     */
    private function isAluno(): bool
    {

        // Definimos o ID do grupo Aluno.
        // Não equeçam que esse ID jamais poderá ser alterado.
        // Por isso, nós defendemos no controller
        $grupoAluno = 4;

        // Verificamos se o usuário logado está no grupo Aluno
        $aluno = $this->grupoUsuarioModel->usuarioEstaNoGrupo($grupoAluno, session()->get('usuario_id'));


        // Verificamos se foi encontrado o registro
        if ($aluno == null) {

            return false;
        }

        // Retornamos true, ou seja, o usuário logado faz parte do grupo aluno
        return true;
    }

    /**
     * Método que verifica se o usuário logado (session()->get('usuario_id')) está associado ao grupo de Secretaria
     *
     * @return boolean
     */
    private function isSecretaria(): bool
    {

        // Definimos o ID do grupo Secretaria.
        // Não equeçam que esse ID jamais poderá ser alterado.
        // Por isso, nós defendemos no controller
        $grupoSecretaria = 5;

        // Verificamos se o usuário logado está no grupo Secretaria
        $secretaria = $this->grupoUsuarioModel->usuarioEstaNoGrupo($grupoSecretaria, session()->get('usuario_id'));


        // Verificamos se foi encontrado o registro
        if ($secretaria == null) {

            return false;
        }

        // Retornamos true, ou seja, o usuário logado faz parte do grupo Secretaria
        return true;
    }

    /**
     * Método que define as permissões que o usuário logado possui.
     * Usado exclusivamente no método pegaUsuarioDaSessao()
     *
     * @param object $usuario
     * @return object
     */
    private function definePermissoesDoUsuarioLogado(object $usuario): object
    {

        // Definimos se o usuário logado é admin
        // Esse atributo será utilizado no método temPermissaoPara() na Entity Usuario
        $usuario->is_admin = $this->isAdmin();

        // Se for admin
        if ($usuario->is_admin == true) {
            $usuario->is_uetp = false;
            $usuario->is_professor = false;
            $usuario->is_aluno = false;
            $usuario->is_secretaria = false;
        } else {
            if ($usuario->is_uetp = true) {
                $usuario->is_uetp = $this->isUetp();
            }
            if ($usuario->is_professor = true) {
                $usuario->is_professor = $this->isProfessor();
            }
            if ($usuario->is_aluno = true) {
                $usuario->is_aluno = $this->isAluno();
            }
            if ($usuario->is_secretaria = true) {
                $usuario->is_secretaria = $this->isSecretaria();
            }
        }


        // Só recuperamos as permissões de um usuário que não seja admin e não seja UETP
        // pois esses dois grupos não possuem permissões
        // O atributo $usuario->permissoes será examinado na Entity Usuario para verificarmos se
        // o mesmo pode ou não visualizar e acessar alguma rota.
        // Notem que se o usuário logado possui o atributo $usuario->permissoes,
        // é porque ele não é admin e não é UETP
        // if ($usuario->is_admin == false && $usuario->is_uetp == false) {

        //     $usuario->permissoes = $this->recuperaPermissoesDoUsuarioLogado();
        // }


        // Nesse ponto já definimos se é admin ou se é UETP.
        // Caso não seja nem admin e nem UETP, então o objeto possui o atributo permissões,
        // que pode ou não estar vazio
        // Portanto, podemos retornar $usuario
        return $usuario;
    }

    /**
     * Método que retorna as permissões do usuário logado
     *
     * @return null|array
     */
    private function recuperaPermissoesDoUsuarioLogado(): array
    {

        $permissoesDoUsuario = $this->usuarioModel->recuperaPermissoesDoUsuarioLogado(session()->get('usuario_id'));

        return array_column($permissoesDoUsuario, 'permissao');
    }
}
