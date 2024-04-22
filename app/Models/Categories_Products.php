<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories_Products extends Model
{
    use HasFactory;
     // Kết nối với bảng 
     protected $table = 'categories_products';
     // Các trường đầu vào
     protected $fillable = [
        'id',
        'id_product',
        'id_category',
     ];
}
