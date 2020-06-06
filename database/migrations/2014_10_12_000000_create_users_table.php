<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        create table 'users'
        ('id' INT AUTO_INCREMENT,
        'name' Varchar (40), 'email' varchar(40),
        .....)


        */
        //membuat tabel baru
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('jabatan');
            $table->string('password');
            $table->integer('idcabang')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('idcabang')->references('id')->on('cabang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
