<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'orders';
    // Các trường đầu vào
    protected $fillable = [
        'code_order',
        'name_buyer',       
        'phone',       
        'email',       
        'address',       
        'total',       
        'id_payment',       
        'id_user',       
    ];
}
