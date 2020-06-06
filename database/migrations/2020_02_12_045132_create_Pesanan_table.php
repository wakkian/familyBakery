<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('noNota');
            $table->date('tanggal pemesanan');
            $table->date('tanggal diambil');
            $table->integer('qty');
            $table->enum('pengiriman',['y','n']);
            $table->enum('status pembayran',['lunas','dp']);
            $table->double('grand total');
            $table->double('pembayaran 1');
            $table->double('pembayaran 2');
            $table->integer('idcabang')->unsigned();
            $table->foreign('idcabang')->references('id')->on('cabang');
            $table->integer('idkaryawan')->unsigned();
            $table->foreign('idkaryawan')->references('id')->on('users');
            $table->integer('idpelanggan')->unsigned();
            $table->foreign('idpelanggan')->references('id')->on('pelanggan');
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
        Schema::dropIfExists('pesanan');
    }
}
