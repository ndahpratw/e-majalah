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
        Schema::create('detail_kontens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_konten')->references('id')->on('kontens')->onDelete('cascade');
            $table->string('judul');
            $table->string('sub_judul');
            $table->string('jenis_layout')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_kontens');
    }
};
