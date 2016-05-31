<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre');
            $table->string('rif');
            $table->string('direccion');
            $table->string('tlf');
            $table->string('n_patronal');
            $table->date('f_incripcion');
            $table->integer('id_user');
            $table->integer('update_user');

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
        Schema::drop('company');
    }
}
