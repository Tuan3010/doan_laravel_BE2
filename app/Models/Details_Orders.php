<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Details_Orders extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'detail_orders';
    // Các trường đầu vào
    protected $fillable = [
        'code_order',
        'id_product',
        'size',
        'color',
        'quantity',
        'price_one_product',
        'total_price'
    ];
}
