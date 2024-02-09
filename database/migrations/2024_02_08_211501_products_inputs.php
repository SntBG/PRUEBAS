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
        Schema::create('products_inputs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('inventory_inputs_id')->constrained('inventory_inputs')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('products_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
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
        Schema::dropIfExists('products_inputs');
    }
};
