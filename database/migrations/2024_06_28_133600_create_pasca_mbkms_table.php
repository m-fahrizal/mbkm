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
        Schema::create('pasca_mbkm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pra');
            $table->string('sertifikat')->nullable();
            $table->string('logbook')->nullable();
            $table->string('transkrip')->nullable();
            $table->string('laporan')->nullable();
            $table->timestamps();
            
            $table->foreign('id_pra')->references('id')->on('pra_mbkm')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasca_mbkms');
    }
};
