<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{
    // Hiển thị danh sách trang
    public function index(){
        if (!(Session::exists('countCart'))) {
            Session::put('countCart',0);
        }
        $arrVariables = [
            'title' => 'Home'
        ];
        return view('user/index',$arrVariables);
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
    
    public function productDetailForm($id){
        $productItem = Product::find($id);
        return view('user/product-detail',compact('productItem'));
    }
    public function productListForm(){
        $productList = Product::all();
        return view('user/product-list',compact('productList'));
    }
    public function searchProductForm(){
        return view('user/search-product');
    }
    public function searchOrderForm(){
        return view('user/search-order');
    }
    public function resultsearchOrderForm(){
        return view('user/result-search-order');
    }
    // Xử lí thêm nút thêm vào giỏ hàng và nút thanh toán
    
}
