<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Aktivasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivasi', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('nopa');
            $table->string('sid');
            $table->string('layanan');
            $table->string('nama');
            $table->string('alamat');
            $table->string('panjangkabel');
            $table->string('koordinat');
            $table->string('fat');
            $table->string('port');
            $table->string('snont');
            $table->string('macont');
            $table->string('olt');
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
        Schema::dropIfExists('aktivasi');
    }
}
