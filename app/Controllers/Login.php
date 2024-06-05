<?php

namespace App\Controllers;

use App\Libraries\Session;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public $session;
    public $pager;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->pager = service('pager');
    }


    public function index()
    {
        return view('login');
    }
    
    public function dashboard()
    {
        $model = new UserModel();
         //$data['records'] = $model->getAllRecords();
         $data['records'] = $model->paginate();
         $data['pager'] = $model->pager;
         return view('dashboard', $data);
    }

    public function authenticate()
    {
        // Get POST data from the form
        $Email = $this->request->getPost('email');
        $Password = $this->request->getPost('password');
        $model = new UserModel();
        $user = $model->where('Email', $Email)
            ->where('Password', $Password)
            ->first(); 

        if ($user) {
             $this->session->set('user', $user);
             $find = $this->session->get('user', $user);
         print_r($find);

        //     $this->session->set('user', "$user");

           return redirect()->to('home');
            echo "login succesfully!.";
        } else {
            echo "something wrong in email or password"; 
        }
    }
    //forget password
    public function password()
    {
        return view('password');
    }

    public function CheckPassword()
    {

        $email = $this->request->getPost('email');
        $userEmail = $this->session->get('user')['Email'];
        if ($email === $userEmail) {
            //return redirect()->to('newPassword');
            return view('newPassword');
        } else {
            echo "Incorrect email";
        }
    }

    public function UpdatePassword()
    {
        $userID = session()->get('user')['id'];
        $newPassword = $this->request->getPost('password');
        $passwordModel = new UserModel();
        $result = $passwordModel->updatePassword($userID, $newPassword);

        if ($result) {
            echo "Your password has been changed successfully.";
        } else {
            echo "Failed to change password.";
        }
    }
}