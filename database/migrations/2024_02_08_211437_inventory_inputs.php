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
        Schema::create('inventory_inputs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('suppliers_id')->constrained('suppliers')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('persons_id')->constrained('persons')->onUpdate('cascade')->onDelete('cascade');
            $table->string('comments')->nullable();
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
        Schema::dropIfExists('inventory_inputs');
    }
};
