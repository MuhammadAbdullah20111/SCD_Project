<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id('product_id'); // Primary key
        $table->string('brand'); // Brand name
        $table->string('product_name'); // Product name
        $table->decimal('price', 8, 2); // Price with precision (8 digits total, 2 decimals)
        $table->timestamps(); // Created_at and Updated_at columns
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
