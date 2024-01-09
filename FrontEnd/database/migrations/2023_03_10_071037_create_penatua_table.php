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
        Schema::create('penatua', function (Blueprint $table) {            
            $table->foreignId('id_jemaat');
            $table->string('status');
            $table->foreignId('id_sektor');
            $table->string('gelar');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_jemaat')->references('id')->on('user_jemaat');
            $table->foreign('id_sektor')->references('id')->on('sektor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penatua');
    }
};
