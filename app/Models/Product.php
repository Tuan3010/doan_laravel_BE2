<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // Kết nối với bảng
    protected $table = "products";
    // Các trường được nhập dữ liệu
    protected $fillable = [
        'id_product',
        'name_product',
        'price_product',
        'des_product',
        'img_product'
    ];
}