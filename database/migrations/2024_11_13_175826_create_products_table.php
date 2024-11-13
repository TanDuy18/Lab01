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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('productID');
$table->unsignedBigInteger('categoryID');
$table->string('productCode')->unique();
$table->string('productName');
$table->text('description')->nullable();
$table->string('productImage')->nullable();
$table->decimal('listPrice', 8, 2)->default(0);
$table->decimal('discountPercent', 5, 2)->default(0);
$table->timestamps();

$table->foreign('categoryID')->references('categoryID')->on('categories');
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
