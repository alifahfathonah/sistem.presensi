<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekapKonfirmasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekap_konfirmasi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('jml');

            $table->unsignedBigInteger('konfirmasi_id');
            $table->foreign('konfirmasi_id')->references('id')->on('post');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('rekap_konfirmasi');
    }
}
