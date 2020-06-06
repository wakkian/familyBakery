<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaPemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaPesanan', function (Blueprint $table) {
            $table->integer('idproduk')->unsigned();
            $table->foreign('idproduk')->references('id')->on('produk');
            $table->integer('idpesanan')->unsigned();
            $table->foreign('idpesanan')->references('noNota')->on('pesanan');
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
        Schema::dropIfExists('notaPesanan');
    }
}
