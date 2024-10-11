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
        Schema::create('sala', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('img_sala')->nullable();
            $table->decimal('costo');
            $table->string('estatus');
            $table->unsignedBigInteger('id_tipo'); 
            $table->timestamps();
            $table->foreign('id_tipo')->references('id')->on('tipo_sala')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sala');
    }
};
