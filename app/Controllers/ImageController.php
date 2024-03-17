<?php

namespace App\Controllers;
use App\Models\ImageModel;
use CodeIgniter\Controller;

class ImageController extends BaseController
{
    public function __construct()
    {
        // Load the form helper in the constructor
        helper(['form']);
    }
    public function index(){
        return view('upload_form');
    }
    public function upload()
    {
        $image = $this->request->getFile('image');

        // Move uploaded image to a directory
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);
            $ImgModel = new ImageModel();
            // Save image details in the database
            $ImgModel->insert(['image' => 'uploads/' . $newName]);

            return redirect()->to('/curd');
        } else {
            return redirect()->back()->with('error', $image->getErrorString());
        }
    }
    
}
