<?php

namespace App\Controllers;

use App\Models\WishlistModel;
use CodeIgniter\Controller;

class WishlistController extends BaseController
{
    // Display all records
    public $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $model = new WishlistModel();
        $data['records'] = $model->getAllRecords();
        return view('', $data);
    }

    // Insert new record
    public function create($id)
    {
        $model = new WishlistModel();
        $userdata = $this->session->get('user');
    
        // Retrieve product details from the model
        $data['product'] = $model->getProductId($id);
    
        if ($userdata && !empty($data['product'])) {
            $product_id = $data['product'][0]['product_id'];
    
            $user_id = $userdata['id'];
    
            $dataToInsert = [
                'product_id' => $product_id,
                'user_id' => $user_id,
            ];
    
            // Insert data into the database
            $model->insertRecord($dataToInsert);
    
            echo "Data inserted successfully!";
        } else {
            echo "User data or product details not found!";
        }
    }
    
    //read wishlist
    public function wishlist()
    {
        //$userdata = $this->session->get('user');
        $id = $this->session->get('user')['id'];
        $wishlist_model = new WishlistModel();
        $wishlistData = $wishlist_model->getWishlistData($id);

        // Pass the data to the view
        $data = [
            'wishlistData' => $wishlistData
        ];

        return view('read_wishlist', $data);
    }
    
    // Delete record
    public function delete($id)
    {
        $model = new WishlistModel();
        echo $model->deleteRecord($id);
       // return redirect()->to('wishlist');
    }
}
