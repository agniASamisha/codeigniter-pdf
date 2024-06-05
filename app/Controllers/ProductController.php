<?php

namespace App\Controllers;

use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends BaseController
{

    public $session;
    public $productModel;

    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        return view('insert');
    }

    public function insert()
    {
        $data = [
            'admin_id' => $this->request->getPost('adminId'),
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'catogary_id' => $this->request->getPost('cId'),
            'price' => $this->request->getPost('price'),
            'quantity' => $this->request->getPost('quantity'),
            $image = $this->request->getFile('image')
        ];

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
        $data['products'] = $Product_model->getAllRecords();

        $cart = $this->session->get('product');

        if (!empty($cart)) {
            $data['count'] = count($cart);
        } else {
            $data['count'] = 0;
        }

        return view('product', $data);
    }

    public function dashaboard()
    {
        $Product_model = new ProductModel();
        $data['products'] = $Product_model->getAllRecords();
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
    public function addToCart()
    {
        // Check if the cart session variable exists and initialize it if necessary
        if (!$this->session->has('product')) {
            $this->session->set('product', []);
        }

        // Get product data from POST request
        $p_quantity = $this->request->getPost('quantity');
        $product_id = $this->request->getPost('productId');
        $p_name = $this->request->getPost('productName');
        $p_price = $this->request->getPost('productPrice');
        $p_discount = $this->request->getPost('productdiscount');
        $p_image = $this->request->getPost('productImage');

        $cart = $this->session->get('product');

        $product_exists = false;
        foreach ($cart as $item) {
            if ($item['product_id'] == $product_id) {
                $product_exists = true;
                break;
            }
        }
        if (!$product_exists) {
            $cart[] = [
                'product_id' => $product_id,
                'image' => $p_image,
                'name' => $p_name,
                'price' => $p_price,
                'quantity' => $p_quantity,
                'discount' => $p_discount,
            ];

            $this->session->set('product', $cart);
            //print_r($cart);
            return redirect()->to('home');

            // return view('view_cart', ['product' => $cart]);
        } else {
            echo "Product is already in the cart.";
        }
    }
    public function viewCart()
    {
        $cart = $this->session->get('product');

        if (!empty($cart)) {
            $count = count($cart);
            //$this->session->remove('product'); 
            return view('view_cart', ['count' => $count, 'product' => $cart]);
            //     //return view('header.php', ['count' => $count]); 
            // return view('view_cart', ['product' => $cart]);
        } else {
            echo "Your cart is empty.";
        }
    }

    public function deleteProductFromCart()
    {
        $productId = $this->request->getPost('id');
        $cartdata = session('product');

        if ($cartdata) {
            foreach ($cartdata as $key => $product) {
                if ($product['product_id'] == $productId) {
                    unset($cartdata[$key]);
                    session()->set('product', $cartdata);
                    //echo "Product removed from cart successfully";
                    return redirect()->to('viewCart');
                }
            }
        }
        echo "Product not found in cart";
    }

    public function updateProductInCart()
    {
        $productId = $this->request->getPost('id');
        $newQuantity = $this->request->getPost('quantity');
        $cartdata = session('product');
        $productFound = false;
        if ($cartdata) {
            foreach ($cartdata as $key => $product) {
                if ($product['product_id'] == $productId) {

                    $cartdata[$key]['quantity'] = $newQuantity;
                    session()->set('product', $cartdata);
                    $productFound = true;
                    break;
                }
            }
        }
        if ($productFound) {
            // echo "Cart updated successfully";
            return redirect()->to('viewCart');
        } else {
            echo "Product not found in cart";
        }
    }
    public function addCart()
    {
        $cart = $this->session->get('product');
        $count = 0; // Initialize $count variable

        if (!empty($cart)) {
            $count = count($cart);
        }

        return view('header.php', ['count' => $count]);
    }
    public function search()
    {
        $model = new ProductModel;
        $search = $this->request->getPost('search');

        $data['product'] = $model->getsearch_detail($search);
        //return redirect()->to('viewCart');
        print_r($data['product']);
        return view('search', $data);
    }
}
