<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'categories';
    // Các trường đầu vào
    protected $fillable = [
        'name_category',
        'type',       
    ];
}
