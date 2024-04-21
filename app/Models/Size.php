<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    // Kết nối với bảng 
    protected $table = 'sizes';
    // Các trường đầu vào
    protected $fillable = [
        'id',
        'name_size',      
    ];
}
