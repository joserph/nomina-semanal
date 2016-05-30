<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concept extends Model
{
    protected $table = 'concepts';

    protected $fillable = [
    	'codigo',
     	'descripcion', 
     	'porcentaje', 
     	'tipo', 
     	'id_user',
     	'update_user'];
}
