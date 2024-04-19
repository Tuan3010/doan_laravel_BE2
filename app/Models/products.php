<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'categories';
    // Các trường đầu vào
    protected $fillable = [
        'id',
        'name_product',
        'price_product',
        'des_product',
        'img_product',
    ];
}
