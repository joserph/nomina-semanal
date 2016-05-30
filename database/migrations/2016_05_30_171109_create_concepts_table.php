<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concepts', function (Blueprint $table) {
            $table->increments('id');

            $table->string('codigo');
            $table->string('descripcion');
            $table->string('porcentaje');
            $table->enum('tipo', ['asignacion', 'deduccion']);
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
        Schema::drop('concepts');
    }
}
