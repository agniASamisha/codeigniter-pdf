<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'Home::test');
$routes->get('/generate_pdf', 'User::generatePdf');
$routes->get('/template', 'Template::home');

$routes->get('/register', 'Register::index');
$routes->post('/register/save', 'Register::save');

$routes->get('login', 'Login::index');
$routes->get('dashboard', 'Login::dashboard');
//$routes->get('dashboard', 'Login::read');
$routes->post('login/authenticate', 'Login::authenticate');
$routes->get('password', 'Login::Password');
$routes->post('CheckPassword', 'Login::CheckPassword');
$routes->post('updatepassword','Login::UpdatePassword' );
//$routes->get('pagination', 'PostController::pagination');


$routes->get('logout', 'Logout::logout');

// route for CURD operation 
$routes->get('/curd', 'CurdController::index');
$routes->post('/curd/create', 'CurdController::create');
$routes->get('/create', 'CurdController::add');
$routes->get('/curd/edit/(:num)', 'CurdController::edit/$1');
$routes->post('/curd/update/(:num)', 'CurdController::update/$1');
$routes->get('/curd/delete/(:num)', 'CurdController::delete/$1');


$routes->get('/image', 'ImageController::index');
$routes->post('/image/upload', 'ImageController::upload');
$routes->get('success_page', 'ImageController::success_page');


$routes->get('/admin', 'AdminController::form');
$routes->post('/insert', 'AdminController::insert');
$routes->get('/mail', 'AdminController::mail');
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1');
$routes->post('/admin/update/(:num)', 'AdminController::update/$1');
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1');


$routes->get('/gallery', 'GalleryController::gallery');
$routes->post('/image_gallery', 'GalleryController::image_gallery');
$routes->get('/read_gallery/(:any)', 'GalleryController::read_gallery/$1');
$routes->get('/view_gallery/(:any)', 'GalleryController::view/$1');
$routes->get('/delete/(:num)', 'GalleryController::delete/$1');
//$routes->get('/product_view/(:any)', 'GalleryController::product_view/$1');


$routes->get('/product', 'ProductController::index');
$routes->post('/add_product', 'ProductController::insert');
$routes->get('/home', 'ProductController::read');
$routes->get('/read_products', 'ProductController::dashaboard');
$routes->get('/product_view/(:num)', 'ProductController::detail/$1');
$routes->post('cart/add/(:num)', 'ProductController::addToCart/$1');
$routes->get('/viewCart', 'ProductController::viewCart');
$routes->get('/cart', 'ProductController::cart');
$routes->post('/deleteProductFromCart', 'ProductController::deleteProductFromCart');
$routes->post('/updateProductInCart', 'ProductController::updateProductInCart');
$routes->post('/search', 'ProductController::search');
$routes->get('/opp', 'ProductController::addCart');



$routes->get('/product_wishlist/(:num)', 'WishlistController::create/$1');
$routes->get('/wishlist', 'WishlistController::wishlist');
$routes->get('/delete_wishlist/(:num)', 'WishlistController::delete/$1');


$routes->get('/address', 'AddressController::index');
$routes->post('/add_address', 'AddressController::addAddress');
$routes->get('/update_address/(:num)', 'AddressController::update/$1');
// $routes->get('/edit/(:num)', 'AddressController::edit/$1');

