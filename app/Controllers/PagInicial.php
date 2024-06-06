<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\ResponseInterface;

class PagInicial extends BaseController
{
    use ResponseTrait;
    public function index()
    {
        return view('paginicial');

        return $this->respond(session());
    }
}
