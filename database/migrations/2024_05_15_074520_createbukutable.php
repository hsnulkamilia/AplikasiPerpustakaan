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
            $table->id();
            $table->string('judul',200)->notNull();
            $table->string('edisi', 50)->notNull();
            $table->integer('no_rak')->notNull();
            $table->date('tahun')->notNull();
            $table->string('penerbit', 100)->notNull();
            $table->integer('kd_penulis')->notNull();
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
