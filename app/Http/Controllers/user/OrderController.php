<?php

namespace App\Http\Controllers\user;
use App\Models\Color;
use App\Models\Size;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function orderForm(){
        $cartArr = Session::get('cart',[]);
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
        // print_r($cartArr);
        return view('user/order',compact('cartArr'));
    }

    public function storeCartandPay(Request $request){
        
        // Hàm dd() trong laravel không tự động cập dữ liệu khi f5 nên sử dụng print_r() để xem dữ liệu
        // Session::forget('cart');
        if($request->exists('addCart')){
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
                
                return redirect()->route('user/product-detail',$request->id_product);            
            }  
        }else if($request->exists('pay')){
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

                print_r($array);
                echo $count;
                
                return redirect()->route('user/order');            
            }  
        }   
    }
    public function updateCart(Request $request){
        $arrCart = Session::get('cart',[]);
        $i = 0 ;
        foreach ($arrCart as $value) {
            if ($value['id_product'] === $request->get('id_product')) {
                $arrCart[$i]['quantity'] = $request->get('quantity');
                $arrCart[$i]['size'] = $request->get('size');
                $arrCart[$i]['color'] = $request->get('color');
                Session::put('cart',$arrCart);
            }
        }
        return redirect()->route('user/order');

    }
    public function deleteCart(Request $request){ 
        
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
    public function deleteCartAll(){
        Session::forget('cart');
        Session::put('countCart',0);
        return redirect()->route('user/order');
    }
}
