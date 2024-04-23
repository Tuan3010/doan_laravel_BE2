<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    // Kết nối với bảng 
    protected $table = 'payments';
    // Các trường đầu vào
    protected $fillable = [
        'name_payment'                     
    ];
}
