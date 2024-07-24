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
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('no_buku');
            $table->string('judul', 200);
            $table->string('edisi', 50);
            $table->integer('no_rak')->unsigned();
            $table->foreign('no_rak')->references('kd_rak')->on('rak');
            $table->date('tahun');
            $table->string('penerbit', 100);
            $table->integer('kd_penulis')->unsigned();
            $table->foreign('kd_penulis')->references('kd_penulis')->on('penulis');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
