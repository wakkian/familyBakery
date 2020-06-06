<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjadwalanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjadwalan', function (Blueprint $table) {
            $table->increments('id');
            $table->time('jam mulai');
            $table->time('jam selesai');
            $table->string('alat yang digunakan');
            $table->integer('idnotaProduksi')->unsigned();
            $table->foreign('idnotaProduksi')->references('noNota')->on('notaProduksi');
            $table->integer('idProduk')->unsigned();
            $table->foreign('idProduk')->references('idproduk')->on('resep');
            $table->integer('idBahanBaku')->unsigned();
            $table->foreign('idBahanBaku')->references('idbahan_baku')->on('resep');
            $table->integer('idkaryawan')->unsigned();
            $table->foreign('idkaryawan')->references('id')->on('users');
            $table->rememberToken();
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
        //
    }
}
