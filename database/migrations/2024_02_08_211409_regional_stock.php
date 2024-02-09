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
        Schema::create('regional_stocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('products_id')->constrained('products')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('intputs');
            $table->integer('outputs');
            $table->integer('stock');
            $table->foreignId('regionals_id')->constrained('regionals')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('regional_stocks');
    }
};
