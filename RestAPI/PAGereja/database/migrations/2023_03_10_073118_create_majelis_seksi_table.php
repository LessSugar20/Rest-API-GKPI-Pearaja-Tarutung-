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
        Schema::create('majelis_seksi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('anggota_majelis_seksi', function (Blueprint $table){
            $table->id();            
            $table->foreignId('id_majelis');
            $table->foreignId('id_user_jemaat');
            $table->foreignId('id_periode');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_majelis')->references('id')->on('majelis_seksi');
            $table->foreign('id_user_jemaat')->references('id')->on('user_jemaat');
            $table->foreign('id_periode')->references('id')->on('periode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('majelis_seksi');
        Schema::dropIfExists('anggota_majelis_seksi');
    }
};
