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
        Schema::create('partangiangan', function (Blueprint $table) {
            $table->id();
            $table->string('sektor');
            $table->string('deskripsi')->nullable();        
            $table->string('alamat');
            $table->string('keluarga');
            $table->dateTime('tanggal');
            $table->string('path');
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
        Schema::dropIfExists('partangiangan');
    }
};
