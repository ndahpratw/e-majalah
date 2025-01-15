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
        Schema::create('layout4s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_detail_konten')->references('id')->on('detail_kontens')->onDelete('cascade');
            $table->text('isi_konten_1');
            $table->text('isi_konten_2');
            $table->text('isi_konten_3');
            $table->text('isi_konten_4');
            $table->string('gambar_1');
            $table->string('gambar_2');
            $table->string('gambar_3');
            $table->string('gambar_4');
            $table->string('gambar_5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layout4s');
    }
};
