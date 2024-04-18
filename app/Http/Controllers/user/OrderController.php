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

    public function storeCartandPay(Request $request){
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
