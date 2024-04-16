<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function orderForm(){
        return view('user/order');
    }

    public function storeCart(Request $request){
        // Hàm dd() trong laravel không tự động cập dữ liệu khi f5 nên sử dụng print_r() để xem dữ liệu
        // Session::forget('cart');
        if($request->exists('addCart')){
            if(!(Session::exists('cart'))) {
                Session::put('cart', );
                Session::push('cart',$request->all());   
                Session::put('countCart', 1);
                return redirect()->route('user/product-detail',$request->id);
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
                
                return redirect()->route('user/product-detail',$request->id);            
            }  
        }else if($request->exists('pay')){

        }
        // Kiểm tra người dùng đã đăng nhập
        
    }
}
