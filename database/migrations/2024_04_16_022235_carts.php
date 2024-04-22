<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('id_product',5);                
            $table->string('name_product');
            $table->integer('price');
            $table->integer('quantity');    
            $table->string('color',20);    
            $table->string('size',20);    
            $table->integer('total_amount');    
            $table->string('img_product',50);
            $table->integer('id_user');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('carts');
    }
};
