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
        Schema::create('petugas_15458', function (Blueprint $table) {
            $table->id('id_15458');
            $table->string('nama_15458');
            $table->string('username_15458')->unique();
            $table->string('password_15458');
            $table->unsignedBigInteger('id_level_15458');
            $table->timestamps();

            $table->foreign('id_level_15458')->references('id_15458')->on('levels_15458')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas_15458');
    }
};