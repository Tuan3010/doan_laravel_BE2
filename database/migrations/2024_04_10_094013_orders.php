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
            $table->string('code_order',10)->unique();
            $table->string('name_buyer',50); 
            $table->string('phone')->digits(10);
            $table->string('email',100);
            $table->string('address');
            $table->double('total');
            $table->integer('status')->default(0);
            $table->integer('id_payment');
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
        Schema::dropIfExists('orders');
    }
};
