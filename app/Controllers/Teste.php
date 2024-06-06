<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class Teste extends BaseController
{
    public function index()
    {
        return view('teste');
    }
};
