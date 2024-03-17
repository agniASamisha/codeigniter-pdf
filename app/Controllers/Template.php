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
    }
    public function home() { 
        print_r($this->session->get('user'));
        die;
        return view('home');
    }
}
?>
