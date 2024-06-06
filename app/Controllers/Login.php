<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    use ResponseTrait;

    public function login()
    {
        return view('login');
    }

    public function entrar()
    {
        helper('form');

        if ($this->request->isAJAX()){
         $usuarioModel = new UsuarioModel();
         $usuarioCheck = $usuarioModel->check(
            $this->request->getPost('email'),
            $this->request->getPost('senha')
         );
         if(!$usuarioCheck) {
            return $this->respond("Usuário e/ou senha não encontrados, por favor, tente novamente.", 500);
         } else{
            $data = [
            'status' => 'success',
            'message' => 'Deu certo',
            'loggin_in' => true,
            'username' => 'User',
            'route' => route_to('inicial.index'),
            ];

            session()->set($data);
            return $this->respond($data);
            // return $this->respond("Seja bem vindo ao nosso site.", 200);
         }
        }
    }
}
