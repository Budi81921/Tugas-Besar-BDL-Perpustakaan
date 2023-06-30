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
        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_koleksi');
            $table->unsignedBigInteger('id_peminjaman');
            $table->foreign('id_peminjaman')->references('id')->on('peminjaman');
            $table->foreign('id_koleksi')->references('id')->on('koleksis');
            $table->timestamp('timestamp');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_peminjamen');
    }
};
