<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'company';

    protected $fillable = [
    	'nombre',
     	'direccion', 
     	'tlf', 
     	'rif',
     	'n_patronal',
     	'f_incripcion',
     	'id_user',
     	'update_user'];
}
