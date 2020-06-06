<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retur', function (Blueprint $table) {
            $table->integer('idproduk')->unsigned();
            $table->foreign('idproduk')->references('id')->on('produk');
            $table->integer('idkelebihan_produk')->unsigned();
            $table->foreign('idkelebihan_produk')->references('id')->on('kelebihanProduk');
            $table->integer('total');
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
        Schema::dropIfExists('retur');
    }
}
