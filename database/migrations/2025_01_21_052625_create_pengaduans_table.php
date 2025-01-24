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
        Schema::create('pengaduan', function (Blueprint $table) {
                $table->id('id_pengaduan');
                $table->string('tgl_pengaduan');
                $table->string('nik',16);
                $table->string('isi_laporan');
                $table->string('foto');
                $table->enum('status', ['0','proses','selesai']);
                $table->timestamps();

                $table->foreign('nik')->references('nik')->on('masyarakat')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
