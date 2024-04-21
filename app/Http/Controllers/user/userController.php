<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Size;
use App\Models\User;
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
    // Xử lí chi tiết sản phẩm
    public function productDetailForm($id_product){
        // Dùng hàm get() khi lấy danh sách , first() lấy 1 đối tượng 
        // Lấy 1 sản phẩm
        $productItem = Product::where('id_product',$id_product)->first();
        // Lấy danh sách màu của sản phẩm có id_pro = $id_product
        $colors = Color::join('colors_products', 'colors.id', '=', 'colors_products.id_color')
                            ->select('colors.name_color', 'colors_products.id_product')
                            ->where('colors_products.id_product',$id_product)
                            ->get();
        //Lấy danh sách size của sản phẩm đó size_pro = $size_pro 
        $sizes = Size::join('sizes_products', 'sizes.id', '=' , 'sizes_products.id_size')
                        ->select('sizes_products.id_product' , 'sizes.name_size')
                        ->where('sizes_products.id_product',$id_product)
                        ->orderBy('sizes.name_size', 'asc')
                        ->get();
        return view('user/product-detail',compact('productItem','colors','sizes'));
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
