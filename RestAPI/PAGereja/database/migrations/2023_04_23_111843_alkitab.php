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
        Schema::create('alkitab', function (Blueprint $table) {
            $table->id();
            $table->integer('id_kitab');
            $table->string('kitab');
            $table->integer('pasal');
            $table->integer('ayat');
            $table->string('firman');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alkitab');
    }
};
