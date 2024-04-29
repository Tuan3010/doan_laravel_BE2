<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Details_Orders;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1.Làm xác nhận đơn hàng
        // 2.Xóa đơn hàng
        // 3.danh sách ngừi dùng
        $orders = Order::all();
        return view('admin/order/listOrder',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        // Lấy thông tin người dùng 
        $infoUser = $request->all();
        // Truy vấn phương thức thanh toán
        $namePayment = Payment::find($request['id_payment']);
        //danh sách chi tiết và Truy vấn tên sản phẩm
        $detailsOrders = Details_Orders::select('detail_orders.*','products.name_product')
                                        ->join('products', 'detail_orders.id_product', '=' , 'products.id_product')
                                        ->where('code_order',$id)
                                        ->get();
        // print_r($nameProducts);
        return view('admin/order/viewOrder',compact('namePayment','infoUser','detailsOrders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $code_order = $request->get('code_order');
        // Xóa giỏ hàng
        Order::destroy($id);
        // Xóa chi tiết giỏ hàng
        Details_Orders::where('code_order',$code_order)->delete();
        return redirect()->route('order.index');
    }
    public function confirmOrder(Request $request){
        // Lấy email để gửi
        $inputemail = $request->get('email');
        // Lấy thông tin người dùng 
        $infoUser = $request->all();
        // Truy vấn phương thức thanh toán
        $namePayment = Payment::find($request['id_payment'])['name_payment'];
        //danh sách chi tiết và Truy vấn tên sản phẩm và ảnh sản phẩm
        $detailsOrders = Details_Orders::select('detail_orders.*','products.name_product','products.img_product')
                                        ->join('products', 'detail_orders.id_product', '=' , 'products.id_product')
                                        ->where('code_order',$request->get('code_order'))
                                        ->get();
        Order::where('code_order',$request->get('code_order'))->update(['status' => 1]);

        Mail::send('admin.order.email',compact('infoUser','namePayment','detailsOrders'),function($email) use($inputemail){
            $email->subject('Đơn hàng cho các tình iu của shop <3');
            $email->to($inputemail,'');
        });
        return redirect()->route('order.index');
    }

}
