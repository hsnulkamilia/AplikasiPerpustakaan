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
        Schema::create('sanksi', function (Blueprint $table) {
            $table->increments('id_sanksi');
            $table->integer('id_anggota')->unsigned();
            $table->foreign('id_anggota')->references('id_anggota')->on('anggota');
            $table->integer('id_peminjaman')->unsigned();
            $table->foreign('id_peminjaman')->references('id_peminjaman')->on('peminjaman');
            $table->integer('jumlah_denda');
            $table->enum('status', ['tunggakan', 'lunas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sanksi');
    }
};
