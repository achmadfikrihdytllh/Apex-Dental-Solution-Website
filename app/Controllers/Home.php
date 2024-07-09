<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        return view('admin/viewLogin');
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function customers()
    {
        return view('admin/viewCustomers');
    }
    public function categories()
    {
        return view('admin/viewCategories');
    }
    public function sizes()
    {
        return view('admin/viewSizes');
    }
    public function product()
    {
        return view('admin/viewProductSizes');
    }
    public function order()
    {
        return view('admin/viewEachOrder');
    }
     public function user()
     {

         return view('user/user');
     }
     public function booking()
     {
         return view('user/booking');
     }
    
    
}
