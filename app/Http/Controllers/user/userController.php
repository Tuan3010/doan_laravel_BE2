<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Categories;
use App\Models\Color;
use App\Models\Image;
use App\Models\Order;
use App\Models\Size;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class userController extends Controller
{
    public function __construct() {
        
    }
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
        if (Auth::check()) {
            return view('user/adore-list');
        }
        return redirect()->route('user/login');
        
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
        // Lấy ds hình ảnh của sản phẩm
        $images = Image::where('id_product',$id_product)->get();
        
        return view('user/product-detail',compact('images','productItem','colors','sizes'));
    }

    public function productListForm(Request $request){
        $categories = Categories::where('type',1)->get();
        $productList = Product::all();
        $colors = Color::all();
        // Xử lí tìm sản phẩm có giá X
        if ($request->has('price1') && $request->get('price1') == 300000 ) {
            $price = $request->get('price1');
            $productList = Product::where('price_product','<',$price)->get();                             
            // Truy vaans sp co gia x
        }elseif($request->has('price1') && $request->get('price1') == 600000 ){
            $price = $request->get('price1');
            $productList = Product::where('price_product','>',$price)->get();
        }
        if ($request->has('price1') && $request->has('price2')){
            $price1 = $request->get('price1');
            $price2 = $request->get('price2');
            $productList = Product::where('price_product','>=',$price1)
                                    ->where('price_product','<=',$price2)
                                    ->get();
        }
        // Xử lí tìm sản phẩm có cate X
        if ($request->has('idcate')) {
            $id = $request->get('idcate');
            $productList = Product::join('categories_products', 'categories_products.id_product', '=', 'products.id_product')
                                    ->where('categories_products.id_category', '=', $id)
                                    ->get();
        }
        // Xử lí tìm màu sắc
        if ($request->has('idcolor')) {
            $id = $request->get('idcolor');
            $productList = Product::join('colors_products', 'colors_products.id_product', '=', 'products.id_product')
                                    ->where('colors_products.id_color', '=', $id)
                                    ->get();
        }
        return view('user/product-list',compact('productList','categories','colors',));
        
    }
    public function searchProductForm(){
        return view('user/search-product');
    }
    public function searchOrderForm(){
        return view('user/search-order');
    }
    public function resultsearchOrderForm(Request $request){
        $code_order = $request->get('code_order');
        $phone = $request->get('phone');
        $order = Order::where('code_order',$code_order)
                      ->where('phone',$phone)
                      ->first();
        $products = Product::join('detail_orders', 'products.id_product', '=', 'detail_orders.id_product')
        ->select('products.name_product', 'detail_orders.price_one_product',
         'detail_orders.quantity', 'detail_orders.size', 'detail_orders.color',
          'detail_orders.total_price','products.img_product')
        ->get();
          
        if ($order != null) {
            return view('user/result-search-order',compact('products','order'));
        }else{
            return redirect()->route('user/search-order')->withError('Xin lỗi hệ thống không tìm thấy đơn hàng bạn muốn tra cứu');
        };

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
            if (Auth::user()['role'] == 0) {
                return redirect()->intended(route('listCategory'))
                ->withSuccess('Đăng nhập thành công !!');
            }elseif(Auth::user()['role'] == 1){
                return redirect()->intended(route('user/index'))
                ->withSuccess('Đăng nhập thành công!!');
            }
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
    //Change password
    public function changePassForm(){
        if (Auth::check()) {
            return view('user/change-pass');
        }else{
            return redirect()->route('user/index');
        }
    }
    public function changePass(Request $request){
        // $requestValidated = $request->validate([
        //     'pass_old' => 'required',
        //     'pass_new' => 'required',
        //     'pass_confirm' => 'required'
        // ]);
        if (Auth::check()) {
            $passwordData = Auth::user()['password'];
            $id_user = Auth::user()['id'];
            $passwordRequest = $request->get('pass_old');
            if (Hash::check($passwordRequest,$passwordData)) {
                if ($request->get('pass_new') == $request->get('pass_confirm') && $request->get('pass_new') != null) {
                    if (strlen($request->get('pass_new')) > 5) {
                        $passHash = Hash::make($request->get('pass_new'));
                        User::where('id',$id_user)->update(['password'=> $passHash]);
                        return redirect()->route('user/changepass')->withSuccess('Thay đổi mật khẩu thành công');
                    }else{
                        return redirect()->route('user/changepass')->withErrors(['newpasslenght' => 'Yêu cầu tối thiểu 6 kí tự']);
                    }
                }else{
                    return redirect()->route('user/changepass')->withErrors(['newpass' => 'Mật khẩu mới và xác nhận lại mật khẩu không chính xác']);
                }
            }else{
                return redirect()->route('user/changepass')->withErrors(['oldpass' => 'Mật khẩu cũ không chính xác']);
            }
        }
    }
    
    
}
