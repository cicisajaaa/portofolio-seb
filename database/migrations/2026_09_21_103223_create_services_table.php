<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('nama_layanan'); // Contoh: Eksplorasi Mineral & Batubara
            $table->string('slug')->unique(); // Untuk URL ramah SEO
            $table->text('deskripsi_singkat'); // Ringkasan untuk kartu di beranda
            $table->longText('deskripsi_lengkap')->nullable(); // Penjelasan detail layanan
            $table->string('ikon')->nullable(); // Nama ikon atau emoji pendukung
            $table->string('gambar')->nullable(); // Foto dokumentasi layanan
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};