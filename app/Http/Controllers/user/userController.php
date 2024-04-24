<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Color;
use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class userController extends Controller
{
    // Hiển thị danh sách trang
    public function index(){
        if (Auth::check()) {
            $id_user = Auth::user()['id'];
            //CHỖ NÀY BUG LƯỢNG CMT
            //$cartUser = Cart::where('id_user',$id_user)->sum('quantity');
            //Session::put('countCart',$cartUser);
        }else if(!(Session::has('countCart'))){
            Session::put('countCart',0);
        }
        $arrVariables = [
            'title' => 'Home'
        ];
        return view('user/index',$arrVariables);
    }
    public function loginForm(){
        //dd(Auth::check());
        return view('user/login');
    }
    public function registerForm(){
        return view('user/register');
    }
    public function registerStore(Request $request){
        // Kiểm tra đầu vào
        $requestValidated = $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:users',
            'user_name' => 'required|max:50|unique:users',
            'password' => 'required|max:50|min:3'            
        ]);       
        // Lưu vào data
        User::create([
            'name' =>$requestValidated['name'],
            'email' =>$requestValidated['email'],
            'user_name' =>$requestValidated['user_name'],
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
    public function infoOrderForm(){
        $codebill = Session::get('code_cart');
        return view('user/info-ordered',compact('codebill'));
    }
    // Xử lí thêm nút thêm vào giỏ hàng và nút thanh toán
    public function checkLogin(){

    }
    public function authUser(Request $request)
    {


        $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);
        //lay email va password
        $credentials = $request->only('user_name', 'password');
        //dd(Auth::check($credentials));
        //kiem tra duoi database
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('user/index'))
                ->withSuccess('Đăng nhập thành công!!');
        }
        //{{ '$request'}};
        return redirect(route('user/login'))->withError('Email hoặc mật khẩu không đúng');
    }
    //log out
    public function logOut()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('user/index'));
    }

    
}
