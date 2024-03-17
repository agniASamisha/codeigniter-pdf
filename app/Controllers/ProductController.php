<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends BaseController{
    
    //public $session;
    public $productModel;
    public function __construct()
    {
        //$this->session = \Config\Services::session();
        // Load the ProductModel
        $this->productModel = new ProductModel();

    }

    public function index(){
        return view('insert');
    }
    
    public function insert(){
        $data = [
            'admin_id' => $this->request->getPost('adminId'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'catogary_id' => $this->request->getPost('cId'),
            'price' => $this->request->getPost('price'),
            'quantity' => $this->request->getPost('quantity'),
           $image = $this->request->getFile('image')
        ];
      //  $image = $this->request->getFile('image');
        if ($image->isValid() && !$image->hasMoved()) {
            $newName = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $newName);
            $data['image'] = 'uploads/' . $newName;
        }
        $Product_model = new ProductModel();
        $Product_model->insert($data);
        echo "data is inserted in the gallery table.";
        //return view('insert');
    }
    
    public function read()
    {
        $Product_model = new ProductModel();
        $data['products']= $Product_model->getAllRecords();
        return view('product', $data);
       
    }

    //here read the data
    public function dashaboard(){
        $Product_model = new ProductModel();
        $data['products']= $Product_model->getAllRecords();
        return view('read_product', $data);
    }

    //here  go to product_detail page
    public function product_view()
    {
        return view('product_detail');
    }

    //here with the id get data 
     public function detail($id)
    {
        $model = new ProductModel();

        $data['product'] = $model->getProductById($id);
        
        $data['images'] = $model->getProductGallery($id);

        return view('product_detail', $data);
    }

    //here store data in the session
    public function addToCart($productId)
    {
        // Retrieve product details from the database
        $product = $this->productModel->find($productId);

        if ($product) {
          
            if (!session()->has('cart')) {
                session()->set('cart', []);
            }

            $cart = session()->get('cart');
            $cart[$productId] = $product;
            session()->set('cart', $cart);
            //print_r($cart);
            echo "product is added";
            
        } else {
            echo "product is not found";
             }
    }
}