<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
        $paymentList = Payment::all();    
        return view('admin/payment/index',compact('paymentList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/payment/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Kiểm tra các trường dữ liệu đầu vào
        $validatedData = $request->validate([
            'name_payment' => 'required|string|max:100'
        ]);
        // Xử lí tạo mới vào lưu
        // c1
        // Payment::create([
        //     'name_payment' => $validatedData['name_payment'],
        // ]);
        // c2
        $payment = new Payment();
        $payment->name_payment = $validatedData['name_payment'];
        $payment->save();
        // Quay lại trang chính
        return redirect()->route('payment.index')->with('success','Tạo mới phương thức thanh toán thành công !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paymentItem = Payment::find($id);
        return view('admin/payment/edit',compact('paymentItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payment = Payment::find($id);
        // Kiểm tra các dữ liệu đầu vào
        $validatedData = $request->validate([
            'name_payment' => 'required|string|max:100'
        ]);
        $payment->update($validatedData);
        // Update
        return redirect()->route('payment.index')->with('success','Cập nhật phương thức thanh toán thành công');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Payment::destroy($id);
        // return redirect()->route('payment.index')->with('success','Tạo mới phương thức thanh toán thành công !');
        return redirect()->route('payment.index')->with('success','Xóa phương thức thanh toán thành công');
    }
}
