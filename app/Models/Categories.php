<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'categories';
    // Các trường đầu vào
    protected $fillable = [
        'id',
        'name_category',
        'type',  
    ];
}
