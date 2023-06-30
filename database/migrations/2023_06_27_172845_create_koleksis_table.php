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
        Schema::create('koleksis', function (Blueprint $table) {
            $table->id('id');
            $table->string('judul_koleksi');
            $table->text('deskripsi_koleksi');
            $table->binary('cover_koleksi');
            $table->integer('jumlah_eksemplar')->nullable();
            $table->string('penerbit')->nullable();
            $table->string('penulis');
            $table->enum('status_koleksi', ['Tersedia', 'Tidak tersedia', 'Tersedia tetatpi tidak bisa dipinjam' ]);
            $table->unsignedBigInteger('id_jk');
            $table->foreign('id_jk')->references('id')->on('jenis_koleksis');
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('koleksis');
    }
};
