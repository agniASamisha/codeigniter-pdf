<?php 
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends BaseController
{
    public $session;
    public function __construct()
    {
        // Load the session library
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        // Load the login form view
        print_r($this->session->get('user'));
        return view('register');
    }
    
    public function save()
    {
        
        try {
            $data = [
                // Get POST data from the form
                'Name' => $this->request->getPost('name'),
                'Email' => $this->request->getPost('email'),
                'UserName' => $this->request->getPost('username'),
                'Phone' => $this->request->getPost('phone'),
                'Password' => $this->request->getPost('password'),
            ];
            $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads', $newName);
                $data['image'] = 'uploads/' . $newName;
            }
            
            // Load the UserModel
            $model = new UserModel();
            
            // Insert the new user into the database
            $model->insert($data);
            return redirect()->to('login');
            //echo "Data inserted successfully!";
        } catch (\Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }

}
