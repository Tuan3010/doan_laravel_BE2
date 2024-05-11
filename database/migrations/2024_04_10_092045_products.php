<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    protected $primaryKey = 'id_product';
    public function up(): void
    {
        
        Schema::create('products', function (Blueprint $table) {
            $table->string('id_product',5)->unique();
            $table->string('name_product',100);
            $table->integer('price_product');
            $table->text('des_product');
            $table->string('img_product',50);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('products');
    }
};
