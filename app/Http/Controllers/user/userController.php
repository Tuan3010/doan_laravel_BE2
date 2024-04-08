<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){
        return view('user/index');
    }
    public function loginForm(){
        return view('user/login');
    }
    public function registerForm(){
        return view('user/register');
    }
    public function adoreForm(){
        return view('user/adore-list');
    }
    public function orderForm(){
        return view('user/order');
    }
    public function productDetailForm(){
        return view('user/product-detail');
    }
    public function productListForm(){
        return view('user/product-list');
    }
    public function searchProductForm(){
        return view('user/search-product');
    }
    public function searchOrderForm(){
        return view('user/search-product');
    }
}
