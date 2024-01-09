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
        Schema::create('dana', function (Blueprint $table) {
            $table->id();
            $table->string('keterangan');
            $table->string('deskripsi');
            $table->dateTime('tanggal')->nullable();
            $table->enum('kategori', ['masuk', 'keluar']);
            $table->double('nominal');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dana');
    }
};
