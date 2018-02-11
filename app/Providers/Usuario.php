<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuario';
	protected $primaryKey='U_id';
	protected $fillable=[
	'nombre',
	'apellido',
	'usser',
	'clave'
	];
	protected $guarded=[
	];
}
