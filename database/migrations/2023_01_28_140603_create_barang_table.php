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
        Schema::create('barang_15458', function (Blueprint $table) {
            $table->id('id_15458');
            $table->string('nama_15458');
            $table->date('tanggal_15458');
            $table->unsignedBigInteger('harga_awal_15458');
            $table->text('deskripsi_15458');
            $table->string('image_15458');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang_15458');
    }
};