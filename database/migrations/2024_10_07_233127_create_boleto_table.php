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
        Schema::create('boleto', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->unsignedBigInteger('id_sala'); 
            $table->timestamps();
            $table->foreign('id_sala')->references('id')->on('sala')->onUpdate('cascade')->onDelete('cascade');
      
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boleto');
    }
};
