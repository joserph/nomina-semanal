<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    protected $fillable = [
    	'nombre',
     	'apellido', 
     	'ci', 
     	'edad', 
     	'direccion', 
     	'tlf', 
     	'cel',
     	'rif',
     	'sexo',
     	'email',
     	'fecha_n',
     	'nacionalidad',
     	'fecha_i',
     	'cargo',
     	'asegurado',
     	'registroivss',
     	'fecha_ivss',
     	'tipo',
     	'sueldo',
     	'sueldo_otro',
     	'bono_a',
     	'estatus',
     	'id_user',
     	'update_user'];
}
