<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User2 extends Model{
protected $table='users';


/*public function Setpasssword($contrasena,$contrasena){
	if(!empty($valor)){

	}

}
*/
protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}



