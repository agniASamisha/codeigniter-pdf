<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    /*this is for testing */
    public function test(){
       // return "<h1> you can delete this function it is just for testing purpose.</h1>";
       $data = [
        'title' => 'Welcome to My Website',
        'content' => 'This is the content of my websites.'
    ];

       
       return view('home/test', $data);
    }
}
