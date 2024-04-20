<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'colors';
    // Các trường đầu vào
    protected $fillable = [
        'name_color',      
    ];
}
