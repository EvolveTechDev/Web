<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $table='usuario';
	protected $primaryKey='U_id';
	public $timestamps = false; //aqui
	protected $fillable=[
	'nombre',
	'apellido',
	'usser',
	'clave',
	'tipo_user'
	];
	protected $guarded=[
	];
}
