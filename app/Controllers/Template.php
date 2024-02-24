<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Template extends Controller
{

    public function home() { 
        return view('home');
    }
}
?>
