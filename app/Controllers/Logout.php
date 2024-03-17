<?php 
namespace App\Controllers;

use App\Libraries\Session;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Logout extends BaseController
{
    public function logout()
    {
        
        $session = session();
        $session->remove('user');
        $session->destroy();
        return redirect()->to('login');
    }
}