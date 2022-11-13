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
}
