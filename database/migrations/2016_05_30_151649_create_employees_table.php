<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            // Personal
            $table->string('nombre');
            $table->string('apellido');
            $table->string('ci');
            $table->integer('edad');
            $table->text('direccion');
            $table->string('tlf');
            $table->string('cel');
            $table->string('rif');
            $table->enum('sexo', ['femenino', 'masculino']);
            $table->string('email');
            $table->date('fecha_n');
            $table->string('nacionalidad');
            // Trabajo
            $table->date('fecha_i');
            $table->string('cargo');
            $table->enum('asegurado', ['si', 'no']);
            $table->string('registroivss');
            $table->date('fecha_ivss');
            $table->enum('tipo', ['accionista', 'empleado']);
            $table->string('sueldo');
            $table->string('sueldo_otro');
            $table->string('bono_a');
            $table->enum('estatus', ['activo', 'retirado', 'despedido', 'reposo']);
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
        Schema::drop('employees');
    }
}
