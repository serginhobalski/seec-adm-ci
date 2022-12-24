<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Aulas extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => 'Aulas',
        ];
        return view('Aulas/index', $data);
    }
}
