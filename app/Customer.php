<?php

namespace proyectQr;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers'; //Apunta a la tabla de la base de datos
    protected $primaryKey = 'id'; 
	public $timestamps = false; //Desactiva fecha y hora de creación del campo 

	 
}
