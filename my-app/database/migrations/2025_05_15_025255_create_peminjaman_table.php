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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->undignedBigInteger("ruang_id");
            $table->undignedBigInteger("pegawai_id");
            $table->date("tanggal");
            $table->time("jam_mulai");
            $table->time('jam_akhir');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerja')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unit_kerja_id')->references('id')->on('unit_kerja')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
