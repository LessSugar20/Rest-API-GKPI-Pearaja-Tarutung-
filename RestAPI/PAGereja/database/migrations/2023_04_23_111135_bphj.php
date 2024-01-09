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
        Schema::create('bphj', function (Blueprint $table) {            
            $table->foreignId('id_jemaat');
            $table->foreignId('id_periode');
            $table->string('pendeta');
            $table->string('guru_jemaat');
            $table->string('sekretaris');
            $table->string('bendahara');    
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('id_jemaat')->references('id')->on('user_jemaat');
            $table->foreign('id_periode')->references('id')->on('periode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bphj');
    }
};
