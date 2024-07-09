<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/user', 'Home::user');
$routes->get('/dokter', 'CategoriesController::dokter');
$routes->post('viewEachOrder_store2', 'CategoriesController::store2');
$routes->get('/dashboard', 'Home::dashboard');
$routes->get('/booking', 'Home::booking');
$routes->get('/dokter1', 'Home::dokter1');
// $routes->get('/viewCustomers', 'Home::customers');
// $routes->get('/viewCategories', 'Home::categories');
// $routes->get('/viewSizes', 'Home::sizes');
// $routes->get('/viewProductSizes', 'Home::product');
// $routes->get('/viewEachOrder', 'Home::order');
//  $routes->get('/viewLogin', 'Home::login');
//  $routes->get('/viewSignUp', 'Home::signup');
$routes->get('/viewCustomers', 'CustomerController::index');
$routes->post('viewCustomers_store', 'CustomerController::store');
$routes->get('edit_viewCustomers/(:num)', 'CustomerController::edit/$1');
$routes->post('update_viewCustomers/(:num)', 'CustomerController::update/$1');
$routes->get('delete_viewCustomers/(:num)', 'CustomerController::delete/$1');

$routes->get('/viewCategories', 'CategoriesController::index');
$routes->post('viewCategories_store', 'CategoriesController::store');
$routes->get('edit_viewCategories/(:num)', 'CategoriesController::edit/$1');
$routes->post('update_viewCategories/(:num)', 'CategoriesController::update/$1');
$routes->get('delete_viewCategories/(:num)', 'CategoriesController::delete/$1');

$routes->get('/viewSizes', 'SizesController::index');
$routes->post('viewSizes_store', 'SizesController::store');
$routes->get('delete_viewSizes/(:num)', 'SizesController::delete/$1');

$routes->get('/viewProductSizes', 'ProductSizesController::index');
$routes->post('/viewProductSizes_store', 'ProductSizesController::store');
$routes->get('delete_viewProductSizes/(:num)', 'ProductSizesController::delete/$1');

$routes->get('/viewEachOrder', 'EachOrderController::index');
$routes->post('viewEachOrder_store', 'EachOrderController::store');

$routes->get('edit_viewEachOrder/(:num)', 'EachOrderController::edit/$1');
$routes->post('update_viewEachOrder/(:num)', 'EachOrderController::update/$1');
$routes->get('delete_viewEachOrder/(:num)', 'EachOrderController::delete/$1');

$routes->get('viewLogin', 'AuthController::login');
$routes->post('loginProcess', 'AuthController::loginProcess');
$routes->get('logout', 'AuthController::logout');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/process', 'RegisterController::process');
$routes->get('/resetpassword', 'AuthController::reset_password');
$routes->post('/resetpassword/process', 'AuthController::resetPasswordProcess');
$routes->post('/profil_store', 'AuthController::store');

$routes->get('/profil', 'AuthController::profile');
$routes->post('/change-password', 'AuthController::changePassword');


