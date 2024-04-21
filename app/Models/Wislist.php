<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wislist extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'wilist';
    // Các trường đầu vào
    protected $fillable = [
        'id_product',
        'id_user',       
    ];
}
