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
        Schema::create('pra_mbkm', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_mahasiswa');
            $table->foreignId('id_dosen');
            $table->string('jenis_mbkm');
            $table->char('periode_mbkm', 255);
            $table->char('durasi_kegiatan', 255);

            $table->string('instansi');
            $table->string('alamat_instansi');
            $table->string('nama_mentor');
            $table->string('posisi');
            $table->string('no_hp');

            $table->string('loa')->nullable();
            $table->string('krs')->nullable();
            $table->string('khs')->nullable();
            $table->timestamps();

            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswa')->onDelete('cascade');
            $table->foreign('id_dosen')->references('id')->on('dosen')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pra_mbkms');
    }
};
