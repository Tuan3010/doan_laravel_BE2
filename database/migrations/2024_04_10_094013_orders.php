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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code_order');
            $table->string('name_buyer'); 
            $table->string('phone')->digits(10);
            $table->string('email');
            $table->string('address');
            $table->double('total');
            $table->text('status');
            $table->string('id_payment');
            $table->string('id_user');
         

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
        Schema::dropIfExists('orders');
    }
};
