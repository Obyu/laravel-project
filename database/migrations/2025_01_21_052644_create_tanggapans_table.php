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
        Schema::create('tanggapan', function (Blueprint $table) {
                $table->id('id_tanggapan');
                $table->foreignId('id_pengaduan')->references('id_pengaduan')->on('pengaduan')->onDelete('cascade');
                $table->string('tgl_tanggapan');
                $table->string('tanggapan');
                $table->foreignId('id_petugas')->references('id_petugas')->on('petugas')->onDelete('cascade');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapans');
    }
};
