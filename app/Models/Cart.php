<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'carts';
    // Các trường đầu vào
    protected $fillable = [
        'id_product',
        'name_product',
        'price',
        'quantity',
        'color',
        'size',
        'total_amount',
        'img_product',
        'id_user'
    ];
}
