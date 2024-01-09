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
        Schema::create('jemaat', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned()->primary();
            $table->string('ayah');
            $table->string('ibu');
            $table->string('pekerjaan_ayah');
            $table->string('pekerjaan_ibu');
            $table->dateTime('masuk_tgl')->nullable();
            $table->dateTime('pindah_tgl')->nullable();
            $table->string('pindah_dari')->nullable();
            $table->string('pindah_ke')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('user_jemaat', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('no_induk');
            $table->foreign('no_induk')->references('id')->on('jemaat');
            $table->string('status');
            $table->string('tempat_lahir');
            $table->dateTime('tgl_lahir');
            $table->dateTime('baptis');
            $table->dateTime('sidi')->nullable();
            $table->dateTime('nikah')->nullable();
            $table->dateTime('pindah_tgl')->nullable();
            $table->dateTime('meninggal')->nullable();            
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
        Schema::dropIfExists('jemaat');
        Schema::dropIfExists('user_jemaat');
    }
};
