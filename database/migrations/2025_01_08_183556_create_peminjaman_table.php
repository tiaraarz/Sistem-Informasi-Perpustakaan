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
            $table->unsignedBigInteger('peminjaman_id_peminjam');
            $table->unsignedBigInteger('peminjaman_id_buku'); 
            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_batas_kembali')->nullable();
            $table->date('tanggal_kembali')->nullable();
            $table->unsignedInteger('jumlah_buku_dipinjam')->default(0);
            $table->unsignedInteger('jumlah_buku_dikembalikan')->default(0);
            $table->timestamps();
            
            // Menambahkan foreign key
            $table->foreign('peminjaman_id_peminjam')->references('id')->on('peminjam')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('peminjaman_id_buku')->references('id')->on('buku')->onDelete('cascade')->onUpdate('cascade');
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
