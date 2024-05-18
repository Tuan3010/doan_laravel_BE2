<?php

namespace App\Http\Controllers\user;
use App\Models\Color;
use App\Models\Size;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Details_Orders;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function __construct() {
        //1.xưe lí view chi tiết đơn hàng 
        // 22.thay đổi trạng thái 0 1
    }

    public function orderForm(){
        
        $cartArr = Session::get('cart',[]);
        $cartUser = [];
        // print_r($cartArr);
        //attempt(['user_name' => 'tuan', 'password' => '111'])
        if (Auth::check()) {
            Session::forget('cart');
            $id_user = Auth::user()['id'];
            $cartUser = Cart::where('id_user',$id_user)->get();
            // Lấy sl sản phẩm trong giỏ hàng @auth
            $countCart = Cart::where('id_user',$id_user)->sum('quantity');
            Session::put('countCart',$countCart);
            // Tạo vòng lặp để lấy ds color
            foreach ($cartUser as &$value) {
                $colors = Color::join('colors_products', 'colors.id', '=', 'colors_products.id_color')
                ->select('colors.name_color', 'colors_products.id_product')
                ->where('colors_products.id_product',$value['id_product'])
                ->get();
                $value['colors'] = $colors;         
            }
            // Tạo vòng lặp đểlấy ds size
            foreach ($cartUser as &$value) {
                $sizes = Size::join('sizes_products', 'sizes.id', '=' , 'sizes_products.id_size')
                        ->select('sizes_products.id_product' , 'sizes.name_size')
                        ->where('sizes_products.id_product',$value['id_product'])
                        ->orderBy('sizes.name_size', 'asc')
                        ->get();
                $value['sizes'] = $sizes;
            } 
                   
        }else{
            if ((Session::has('cart'))) {  
                         
                // Tạo vòng lặp để lấy ds color
                foreach ($cartArr as &$value) {
                    $colors = Color::join('colors_products', 'colors.id', '=', 'colors_products.id_color')
                    ->select('colors.name_color', 'colors_products.id_product')
                    ->where('colors_products.id_product',$value['id_product'])
                    ->get();
                    $value['colors'] = $colors;         
                }
                // Tạo vòng lặp đểlấy ds size
                foreach ($cartArr as &$value) {
                    $sizes = Size::join('sizes_products', 'sizes.id', '=' , 'sizes_products.id_size')
                            ->select('sizes_products.id_product' , 'sizes.name_size')
                            ->where('sizes_products.id_product',$value['id_product'])
                            ->orderBy('sizes.name_size', 'asc')
                            ->get();
                    $value['sizes'] = $sizes;
                }        
            }
        }
        $totalMoney = 0;
        $payments = Payment::all();
        return view('user/order',compact('cartArr','cartUser', 'totalMoney','payments'));
    }

    public function storeCartandPay(Request $request){
        
        // Hàm dd() trong laravel không tự động cập dữ liệu khi f5 nên sử dụng print_r() để xem dữ liệu
        // Session::forget('cart');
        if($request->exists('addCart')){
            if (Auth::check()) {
                
                $id_user = Auth::user()['id'];
                $id_product = $request->get('id_product');
                $carts = Cart::where('id_user',$id_user)
                            ->where('id_product', $id_product)
                            ->first();
                // $countCart = Cart::where('id_user',$id_user)->sum('quantity');
                
                if ($carts != null) {
                   $newquantity = $carts['quantity'] + $request->get('quantity');
                   $newtotalamount = $newquantity * $carts['price'];
                   $carts->update(['quantity' => $newquantity, 'total_amount' => $newtotalamount]);
                   Session::put('countCart',Session::get('countCart') + $request->get('quantity'));                
                   return redirect()->route('user/product-detail',$request->id_product);
                }else{
                    Cart::create([
                        'id_product' => $request->get('id_product'),
                        'name_product' => $request->get('name_product'),
                        'price' => $request->get('price_product'),
                        'quantity' => $request->get('quantity'),
                        'color' => $request->get('color'),
                        'size' => $request->get('size'),
                        'total_amount' => $request->get('quantity') * $request->get('price_product'),
                        'img_product' => $request->get('img_product'),
                        'id_user' => $id_user,                       
                    ]);
                    Session::put('countCart',Session::get('countCart') + $request->get('quantity'));               
                    return redirect()->route('user/product-detail',$request->id_product);
                }
                
                
            }else{

                if(!(Session::exists('cart'))) {
                    Session::put('cart', );
                    Session::push('cart',$request->all());   
                    Session::put('countCart', 1);
                    return redirect()->route('user/product-detail',$request->id_product);
                }else{          
                    $i = 0;
                    $fg = 0;          
                    $array = Session::get('cart');  
                    $count = Session::get('countCart');      
                    // Check có tồn tại sản phẩm hay chưa (rồi = tăng số lượng)
                    foreach ($array as $value) {
                        if ($value['id_product'] === $request->get('id_product' )) {
                            $value['quantity'] = $value['quantity'] + $request->get('quantity');
                            $array[$i]['quantity'] = $value['quantity'];
                            Session::put('cart',$array);
                            $count = $count + $request->get('quantity');
                            // echo $count;
                            // echo '.'.$value['quantity'];
                            Session::put('countCart', $count);
                            $fg = 1;
                            break;
                        }
                        $i++;
                    } 
                    if ($fg == 0) {
                        Session::push('cart',$request->all());
                        $count += $request->get('quantity');
                        Session::put('countCart', $count);
                    }    
                    
                    return redirect()->route('user/product-detail',$request->id_product);            
                }  
            }
        }else if($request->exists('pay')){
            if (Auth::check()) {
                $id_user = Auth::user()['id'];
                $id_product = $request->get('id_product');
                $carts = Cart::where('id_user',$id_user)
                            ->where('id_product', $id_product)
                            ->first();
                // $countCart = Cart::where('id_user',$id_user)->sum('quantity');
                
                if ($carts != null) {
                   $newquantity = $carts['quantity'] + $request->get('quantity');
                   $newtotalamount = $newquantity * $carts['price'];
                   $carts->update(['quantity' => $newquantity, 'total_amount' => $newtotalamount]);              
                   return redirect()->route('user/order');
                }else{
                    Cart::create([
                        'id_product' => $request->get('id_product'),
                        'name_product' => $request->get('name_product'),
                        'price' => $request->get('price_product'),
                        'quantity' => $request->get('quantity'),
                        'color' => $request->get('color'),
                        'size' => $request->get('size'),
                        'total_amount' => $request->get('quantity') * $request->get('price_product'),
                        'img_product' => $request->get('img_product'),
                        'id_user' => $id_user,                       
                    ]);               
                    return redirect()->route('user/order');
                }
            } else {                
                if(!(Session::exists('cart'))) {
                    Session::put('cart', );
                    Session::push('cart',$request->all());   
                    Session::put('countCart', 1);
                    return redirect()->route('user/order');
                }else{          
                    $i = 0;
                    $fg = 0;          
                    $array = Session::get('cart');  
                    $count = Session::get('countCart');      
                    // Check có tồn tại sản phẩm hay chưa (rồi = tăng số lượng)
                    foreach ($array as $value) {
                        if ($value['id_product'] === $request->get('id_product' )) {
                            $value['quantity'] = $value['quantity'] + $request->get('quantity');
                            $array[$i]['quantity'] = $value['quantity'];
                            Session::put('cart',$array);
                            $count = $count + $request->get('quantity');
                            echo $count;
                            echo '.'.$value['quantity'];
                            Session::put('countCart', $count);
                            $fg = 1;
                            break;
                        }
                        $i++;
                    } 
                    if ($fg == 0) {
                        Session::push('cart',$request->all());
                        $count += $request->get('quantity');
                        Session::put('countCart', $count);
                    }                 
                    return redirect()->route('user/order');            
                }  
            }
            
        }   
        
    }
    public function updateCart(Request $request){
        if (Auth::check()) {
            $id_user = Auth::user()['id'];
            $id_product = $request->get('id_product');
            $productNedUpdate = Cart::where('id_user',$id_user)
                                    ->where('id_product', $id_product)
                                    ->first();
            $productNedUpdate->update(['color' => $request->color,
                                       'quantity' =>$request->quantity,
                                       'size' => $request->size]);
        } else {            
            $arrCart = Session::get('cart',[]);
            $i = 0 ;
            foreach ($arrCart as $value) {
                if ($value['id_product'] === $request->get('id_product')) {
                    $arrCart[$i]['quantity'] = $request->get('quantity');
                    $arrCart[$i]['size'] = $request->get('size');
                    $arrCart[$i]['color'] = $request->get('color');
                    Session::put('cart',$arrCart);
                    // Xử lí số lượng sản phẩm trong giỏ hàng
                    $countCart = Session::get('cart');
                    $totalcountCart = 0;
                    foreach ($countCart as  $value) {
                         
                         $totalcountCart += $value['quantity'];
                    }
                    Session::put('countCart',$totalcountCart);
                    break;
                }
            }
        }
        return redirect()->route('user/order');
        

    }
    public function deleteCart(Request $request){ 
        if (Auth::check()) {
            $id_user = Auth::user()['id'];
            Cart::where('id_product',$request->id_product)
                            ->where('color',$request->color)
                            ->where('size',$request->size)
                            ->where('id_user',$id_user)
                            ->delete();
            Session::put('countCart',Session::get('countCart') - $request->quantity);
            return redirect()->route('user/order');
        } else {            
            //Gọi phần tử  
            $arr = Session::get('cart');
            $count = Session::get('countCart');
            $id = $request->get('id');
            //Giữa hàm xóa phần tử index thì unset() và array_splice() 
            // Hàm unset() xóa vị trí nào mất luôn vị trí đó 0 x 2 3
            // Hàm array_splice xóa vị trí bất kì thì sẽ dồn lại : first 01234 after 012
            $count -= $arr[$id]['quantity']; 
            array_splice($arr,$id,1);
            // Lưu session
            Session::put('cart',$arr);
            Session::put('countCart',$count);
            if (Session::get('countCart') == null) {
                Session::put('countCart',0);
            }
            return redirect()->route('user/order');
        }       
    }
    public function deleteCartAll(){
        if (Auth::check()) {
            $id_user = Auth::user()['id'];
            Cart::where('id_user', $id_user)->delete();
            Session::put('countCart',0);
            return redirect()->route('user/order');
        } else {            
            Session::forget('cart');
            Session::put('countCart',0);
            return redirect()->route('user/order');
        }
        
    }
    public function payment(Request $request){
        //Kiểm tra validated
        $requestValidated = $request->validate([
            'name_buyer' => 'required|max:50',
            'phone' => 'required|numeric|min:7|max:11',      
            'email' => 'required|email|max:100',
            'address' => 'required|max:255'
        ]);
        $codebill = 'TLS'.rand(0,99999);
        if (Auth::check()) {
            
            $id_user = Auth::user()['id'];
            $carts = Cart::where('id_user',$id_user)->get();
            // Lấy danh sách giỏ hàng của ng dùng $id_user để lưu vào chi tiết order
            foreach ($carts as $item) {
                Details_Orders::create([
                    'code_order' => $codebill,
                    'id_product' => $item['id_product'],
                    'size' => $item['size'],
                    'color' => $item['color'],
                    'quantity' => $item['quantity'],
                    'price_one_product' => $item['price'],
                    'total_price' => $item['total_amount'],
                ]);
            }
            // print_r($requestValidated);
            Order::create([
                'code_order' => $codebill,
                'name_buyer' => $requestValidated['name_buyer'],               
                'phone' => $requestValidated['phone'],               
                'email' => $requestValidated['email'],               
                'address' => $requestValidated['address'],               
                'total' => $request['total'],               
                'id_payment' => $request['payment'],               
                'id_user' => $id_user,                              
            ]);

            Cart::where('id_user',$id_user)->delete();
            Session::put('countCart',0);
            Session::put('code_cart',$codebill);
            return redirect()->route('user/info-order');
        }else{
            $carts = Session::get('cart',[]);
            if (count($carts) > 0) {
                foreach ($carts as $item) {
                    Details_Orders::create([
                        'code_order' => $codebill,
                        'id_product' => $item['id_product'],
                        'size' => $item['size'],
                        'color' => $item['color'],
                        'quantity' => $item['quantity'],
                        'price_one_product' => $item['price_product'],
                        'total_price' => $item['price_product'] * $item['quantity'],
                    ]);
                }
                Order::create([
                    'code_order' => $codebill,
                    'name_buyer' => $requestValidated['name_buyer'],               
                    'phone' => $requestValidated['phone'],               
                    'email' => $requestValidated['email'],               
                    'address' => $requestValidated['address'],               
                    'total' => $request['total'],               
                    'id_payment' => $request['payment'],               
                    'id_user' => 0,                              
                ]);
                Session::forget('cart');
                Session::put('countCart',0);
                Session::put('code_cart',$codebill);
                return redirect()->route('user/info-order');
            }else{
                return redirect()->route('user/order');
            }
            
        }
    }
}
