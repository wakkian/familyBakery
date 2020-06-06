<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaPenjualanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaPenjualan', function (Blueprint $table) {
            $table->integer('idproduk')->unsigned();
            $table->foreign('idproduk')->references('id')->on('produk');
            $table->integer('idpenjualan')->unsigned();
            $table->foreign('idpenjualan')->references('noNota')->on('penjualan');
            $table->double('sub total');
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
        Schema::dropIfExists('notaPenjualan');
    }
}
