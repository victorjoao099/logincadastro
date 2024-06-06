<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;

class Cadastro extends BaseController
{

    use ResponseTrait;

    public function cadastro()
    {
        return view('cadastro');
    }

    public function index()
    {
        helper('form');
        
        if ($this->request->isAJAX()) {
            $usuarioModel = new UsuarioModel();
            $usuarioData = $this->request->getPost();

            // dd($usuarioModel->check($usuarioData['email'], $usuarioData['senha']));
            if ($usuarioModel->check($usuarioData['email'], $usuarioData['senha'])){
                return $this->respond("Não é possível usar esse email", 401);
            } else {
                // return $this->respond("Usuário criado", 200);
            }
            try{
                if ($usuarioModel->save($usuarioData)){
                    $data = [
                        'status' => 'success',
                        'message' => 'Deu tudo certo',
                        'route' => route_to('login.login')
                    ];

                    return $this->respond($data);
                    // return redirect('pagInicial');
                }
            } catch (Exception $e){
                return $this->respond("Usuário não criado", 500);
            }
        }
    }
}
