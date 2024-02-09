<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categories_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('product');
            $table->foreignId('suppliers_id')->constrained('suppliers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('packaging_types_id')->constrained('packaging_types')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('minimum_stock');
            $table->string('state')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
