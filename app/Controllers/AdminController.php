<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminController extends BaseController
{
    public $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }


    public function form()
    {
            print_r($this->session->get('user'));
        return view('register');
    }

    //insert data
    public function insert()
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

            $model = new AdminModel();
            $model->insert($data);
            return redirect()->to('login');
            //echo "Data inserted successfully!";
        } catch (\Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }

    // Fetch single record and display in edit form
    public function edit($id)
    {
        $model = new AdminModel();
        $data['record'] = $model->getRecordByID($id);
        return view('edit', $data);
    }

    // Update record
    public function update()
    {
        $model = new AdminModel();
        $id = $this->request->getPost('id');
        $data = [
            'Name' => $this->request->getPost('name'),
            'Email' => $this->request->getPost('email'),
            'Phone' => $this->request->getPost('phone')
        ];
        $image = $this->request->getFile('image');

        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);
            $data['image'] = 'uploads/' . $newName;
        }
        $model->updateRecord($id, $data);
        return redirect()->to(base_url('dashboard'));
    }

    // Delete record
    public function delete($id)
    {
        $model = new AdminModel();
        $model->deleteRecord($id);
        return redirect()->to('dashboard');
    }

    public function mail()
    {
        $email = \Config\Services::email();

        $config['protocol'] = 'smtp';
        $config['SMTPHost'] = 'smtp.gmail.com';
        $config['SMTPUser']  = 'chauhanamisha561@gmail.com';
        $config['SMTPPass'] = 'lleb lryl dgcd fhze';
        //$config['SMTPPass'] = 'tls';
        $config['SMTPPort'] = '25';
        $email->initialize($config);

        $email->setFrom('chauhanamisha561@gmail.com', '');
        $email->setTo('ananyasonkar935@gmail.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email for knowing it is working or not.');

        //$email->send();


        //     echo "email generated";
        // //return view('email.com');
        // $to = 'ananyasonkar935@gmail.com';
        // $subject = 'Test email with database';
        // $message = 'This is a test email for me, I hope i can do it withot form with database.';

        //  // Load Email Library
        //     $email = \Config\Services::email();
        // 	 // Set email parameters
        //     $email->setFrom('chauhanamisha561@gmail.com');
        //     $email->setTo($to);
        //     $email->setSubject($subject);
        //     $email->setMessage($message);
        if ($email->send() == false) {
            echo 'Email sending failed.';
            $data = $email->printDebugger(['headers']);
            print_r($data);
        } else {
            echo 'Email send.';
        }
    }
}
