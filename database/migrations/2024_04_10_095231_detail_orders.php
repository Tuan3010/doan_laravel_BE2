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
        //
        Schema::create('detail_orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_order');
            $table->string('id_product'); 
            $table->integer('quantily');
            $table->double('price_one_product');
            $table->double('total_price');
     
         

            //$table->text('type');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('detail_orders');
    }
};
