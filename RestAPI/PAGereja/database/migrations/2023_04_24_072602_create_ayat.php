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
        Schema::create('ayat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_alkitab');
            $table->string('deskripsi')->nullable();
            $table->dateTime('tanggal');
            $table->timestamps();
            $table->foreign('id_alkitab')->references('id')->on('alkitab');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayat');
    }
};
