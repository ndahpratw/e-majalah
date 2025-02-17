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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_konten')->references('id')->on('kontens')->onDelete('cascade');
            $table->foreignId('id_mitra')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->string('judul');
            $table->string('sub_judul');
            $table->string('jenis_layout')->nullable();
            $table->enum('status', ['Belum Diproses','Sedang Diproses', 'Ditolak', 'Selesai'])->nullable();
            $table->enum('status_pembayaran', ['Belum Bayar','Menunggu Konfirmasi','Lunas'])->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->string('berkas')->nullable();
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
