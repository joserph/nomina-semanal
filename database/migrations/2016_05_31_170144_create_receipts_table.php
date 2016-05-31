<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('id');

            $table->date('desde');
            $table->date('hasta');
            $table->integer('dias_lab');
            $table->date('fecha');
            $table->integer('id_user');
            $table->integer('update_user');
            $table->integer('id_company')->unsigned();
            $table->foreign('id_company')->references('id')->on('company');

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
        Schema::drop('receipts');
    }
}
