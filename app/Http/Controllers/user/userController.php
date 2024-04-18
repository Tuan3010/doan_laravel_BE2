<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function index(){
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
    public function registerStore(Request $request){
        // Kiểm tra đầu vào
        $requestValidated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email',
            'username' => 'required|max:50',
            'password' => 'required|max:50|min:3'            
        ]);       
        // Lưu vào data
        User::create([
            'name' =>$requestValidated['name'],
            'email' =>$requestValidated['email'],
            'user_name' =>$requestValidated['username'],
            'password' => $requestValidated['password'],
            // 'password' => Hash::make($requestValidated['password']),
            'role' => 1
        ]);
        return redirect()->route('user/register')->with('success','Đăng kí thành công !');
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
        return view('user/search-order');
    }
    public function resultsearchOrderForm(){
        return view('user/result-search-order');
    }
}
