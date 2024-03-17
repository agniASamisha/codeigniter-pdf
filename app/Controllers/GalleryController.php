<?php

namespace App\Controllers;
use App\Libraries\Session;
use App\Models\GalleryModel;
use CodeIgniter\Controller;

class GalleryController extends BaseController{
    public $session;
    public $pager;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->pager = service('pager');
    }
    public function gallery()
    {
        return view('create_gellery');
    }

    public function image_gallery()
    {
        try {
            $data = [
                'admin_id' => $this->request->getPost('admin_id'),
                'product_id' => $this->request->getPost('product_id'),
            ];
            $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $newName = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads', $newName);
                $data['image'] = 'uploads/' . $newName;
            }

            $model = new GalleryModel();
            $model->insert($data);
            return redirect()->to('dashboard');
            echo "data is inserted in the gallery table.";
        } catch (\Exception $e) {
            echo "An error occurred: " . $e->getMessage();
        }
    }
    //read_gallery
    
        public function read_gallery($id)
    {
        $galleryModel = new GalleryModel();
        $data['gallery'] = $galleryModel->getGalleryByAdminId($id);
        return view('gallery', $data);
    }

    public function view($id)
    {
        $galleryModel = new GalleryModel();
        $data['gallery'] = $galleryModel->getGalleryByProductId($id);
        return view('product_gallery', $data);
    }
    // Delete record
    // public function delete($id)
    // {
    //     $galleryModel = new GalleryModel();
    //     $galleryModel->deleteRecord($id);
    //     echo"data deleted";
    //    // return redirect()->to('read_gallery');
    // }

    // Delete record
    public function delete($id)
{
    $galleryModel = new GalleryModel();
    $galleryModel->deleteRecord($id);
    return redirect()->to('dashboard');
}
public function product_view($id)
{
    $galleryModel = new GalleryModel();
    $data['gallerys'] = $galleryModel->getGalleryByProductId($id);
    return view('product_detail', $data);
}
    
}


?>