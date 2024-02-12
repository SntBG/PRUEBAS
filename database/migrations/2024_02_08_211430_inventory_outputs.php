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
        Schema::create('inventory_outputs', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('clients_id')->constrained('clients')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('people_id')->constrained('people')->onUpdate('cascade')->onDelete('cascade');
            $table->string('comments')->nullable();
            $table->string('regional');
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
        Schema::dropIfExists('inventory_outputs');
    }
};
