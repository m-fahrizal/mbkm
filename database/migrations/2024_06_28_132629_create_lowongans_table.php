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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan', 100);
            $table->text('deskripsi');
            $table->string('tempat', 50);
            $table->string('posisi', 50);
            $table->char('durasi_magang', 10);
            $table->string('deadline');
            $table->string('flyer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongans');
    }
};
