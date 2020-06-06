<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->integer('idproduk')->unsigned();
            $table->foreign('idproduk')->references('id')->on('produk');
            $table->integer('idbahan_baku')->unsigned();
            $table->foreign('idbahan_baku')->references('id')->on('bahanBaku');
            $table->integer('jumlah');
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
        Schema::dropIfExists('resep');
    }
}
