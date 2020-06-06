<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaProduksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaProduksi', function (Blueprint $table) {
            $table->increments('noNota');
            $table->date('tanggal mulai');
            $table->date('tanggal selesai');
            $table->integer('kelebihan produksi');
            $table->integer('produk gagal');
            $table->integer('stok pengembalian bahan baku');
            $table->integer('jumlah produksi');
            $table->integer('idpesanan')->unsigned();
            $table->foreign('idpesanan')->references('noNota')->on('pesanan');
            $table->integer('idkaryawan')->unsigned();
            $table->foreign('idkaryawan')->references('id')->on('users');
            $table->integer('idprodukPesanan')->unsigned();
            $table->foreign('idprodukPesanan')->references('idproduk')->on('notapesanan');
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
        Schema::dropIfExists('notaProduksi');
    }
}
