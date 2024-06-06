<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Logout extends BaseController
{
    public function destroy()
    {
        session() -> remove('');

        return redirect()->route('login');
    }
}
