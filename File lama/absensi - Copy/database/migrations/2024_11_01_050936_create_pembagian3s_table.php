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
        Schema::create('pembagian3s', function (Blueprint $table) {
            $table->integer('pembagian3_id')->primary();  
            $table->string('pembagian3_nama', 100)->nullable();
            $table->string('pembagian3_ket')->default(''); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembagian3s');
    }
};
