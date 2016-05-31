<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $table = 'receipts';

    protected $fillable = [
    	'desde',
     	'hasta', 
     	'dias_lab', 
     	'fecha',
     	'id_user',
     	'update_user',
     	'id_company'];
}
