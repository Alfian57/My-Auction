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
        Schema::create('pemenang_15458', function (Blueprint $table) {
            $table->id('id_15458');
            $table->unsignedBigInteger('id_lelang_15458');
            $table->unsignedBigInteger('id_history_lelang_15458');
            $table->timestamps();

            $table->foreign('id_lelang_15458')->references('id_15458')->on('lelang_15458')->onDelete('cascade');
            $table->foreign('id_history_lelang_15458')->references('id_15458')->on('history_lelang_15458')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemenang');
    }
};