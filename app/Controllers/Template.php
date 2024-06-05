<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Template extends Controller
{
    public $session;
    public function __construct()
    {
        // Load the session library
        $this->session = \Config\Services::session();
        $this->session->set('user_id', 123);
    }
    public function home() { 
        print_r($this->session->get('user_id'));
        //die;
         if ($this->session->has('user_id')) {
            // Session variable exists
            print_r($this->session->get('user'));
        }
        return view('home');
    }
}
?>
