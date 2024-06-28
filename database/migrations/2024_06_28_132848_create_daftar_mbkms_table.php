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
        Schema::create('daftar_mbkm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa');
            $table->foreignId('id_lowongan');
            $table->char('periode_mbkm', 4);
            $table->integer('no_hp');
            $table->string('krs')->nullable();
            $table->string('khs')->nullable();
            $table->string('cv')->nullable();
            $table->string('portofolio')->nullable();
            $table->timestamps();

            $table->foreign('id_lowongan')->references('id')->on('lowongan')->onDelete('cascade');
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_mbkms');
    }
};
