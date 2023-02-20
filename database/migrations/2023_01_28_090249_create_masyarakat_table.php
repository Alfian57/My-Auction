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
        Schema::create('masyarakat_15458', function (Blueprint $table) {
            $table->id('id_15458');
            $table->string('nama_15458');
            $table->string('username_15458')->unique();
            $table->string('password_15458');
            $table->string('telp_15458', 25);
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
        Schema::dropIfExists('masyarakat_15458');
    }
};