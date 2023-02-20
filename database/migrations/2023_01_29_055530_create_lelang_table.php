<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelang_15458', function (Blueprint $table) {
            $table->id('id_15458');
            $table->unsignedBigInteger('id_barang_15458');
            $table->date('tanggal_15458');
            $table->unsignedBigInteger('harga_akhir_15458')->nullable();
            $table->unsignedBigInteger('id_masyarakat_15458')->nullable();
            $table->unsignedBigInteger('id_petugas_15458');
            $table->enum('status_15458', ['dibuka', 'ditutup']);
            $table->timestamps();

            $table->foreign('id_barang_15458')->references('id_15458')->on('barang_15458')->onDelete('cascade');
            $table->foreign('id_masyarakat_15458')->references('id_15458')->on('masyarakat_15458')->onDelete('cascade');
            $table->foreign('id_petugas_15458')->references('id_15458')->on('petugas_15458')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lelang_15458');
    }
};
