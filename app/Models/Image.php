<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'images';
    // Các trường đầu vào
    protected $fillable = [
        'name_img',
        'id_product',       
    ];
}
