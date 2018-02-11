<?php
/*application routes*/

/*
Route::get('/',['as'=>'proyectos', 'uses'=>'PagesController@proyecto']);
*/

Route::get('', function($nombre="Invitado"){
	//return view('Proyectos');
	return view('Proyectos',compact('nombre'));
});
