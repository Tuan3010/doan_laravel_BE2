<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colors_Products extends Model
{
    use HasFactory;
    protected $table = 'colors_products';
    // Các trường đầu vào
    protected $fillable = [
       'id',
       'id_product',
       'id_color',
    ];
}
