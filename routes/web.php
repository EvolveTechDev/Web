<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Mostrar home
Route::get('home',['as'=>'proyecto.index', 'uses'=>'ProyectoControlador@index']);
Route::get('',['as'=>'index', 'uses'=>'PagesController@index']);

//Route::get('Proyectos', ['as'=>'Proyectos', 'uses'=>'PagesController@Proyectos']);

//Route::get('Facturas', ['as'=>'Facturas', 'uses'=>'PagesController@Facturas']);

//Route::get('Cotizaciones', ['as'=>'Cotizaciones', 'uses'=>'PagesController@Cotizaciones']);

//Route::get('upgrade', ['as'=>'upgrade', 'uses'=>'PagesController@upgrade']);

//Route::get('table', ['as'=>'showtable', 'uses'=>'PagesController@table']);

//Route::get('template', ['as'=>'template', 'uses'=>'PagesController@template']);

//Route::get('Cotizaciones1', ['as'=>'Cotizaciones1', 'uses'=>'PagesController@Cotizaciones1']);

//metodos de manipulacion de proyecto
Route::get('Proyectos/guardar',['as'=>'proyecto.store', 'uses'=>'ProyectoControlador@store']);
Route::get('Proyectos',['as'=>'proyecto.index', 'uses'=>'ProyectoControlador@index']);
Route::get('table/{P_id}', ['as' => 'showtable', 'uses' =>'ProyectoControlador@table']);
//actividades asociadas a un proyecto
//Agregar
Route::post('actividades/{P_id}', ['as' => 'actividad.store', 'uses' =>  'ProyectoControlador@storeact']);
//Archivos
//Agregar
Route::post('table/{P_id}', ['as' => 'savetable', 'uses' =>'ProyectoControlador@storefile']);
//eliminar
Route::get('table/{P_id}/{A_id}/delete', ['as'=>'deletetable', 'uses'=>'ProyectoControlador@destroyfile']);
//Descargar
Route::get('table/{P_id}/{A_id}/download', ['as'=>'downloadtable', 'uses'=>'ProyectoControlador@downloadfile']);



//metodos de manipulacion de cotizaciones
Route::group(['middleware'=>'auth_login'], function () {
	Route::get('Cotizaciones',['as'=>'cotizacion.index', 'uses'=>'CotizacionControlador@index']);
	Route::get('template/{F_id}', ['as' => 'template', 'uses' =>'CotizacionControlador@template']);
	Route::post('Cotizaciones/GuardarWeb',['as'=>'Cotizacion.storeWebCorporativa', 'uses'=>'CotizacionControlador@storeWebCorporativa']);
	Route::post('Cotizaciones/GuardarTienda',['as'=>'Cotizacion.storeTiendaOnline', 'uses'=>'CotizacionControlador@storeTiendaOnline']);
	Route::post('Cotizaciones/GuardarDesarrollo',['as'=>'Cotizacion.storeDesarrolloPersonalizado', 'uses'=>'CotizacionControlador@storeDesarrolloPersonalizado']);
	Route::get('template/{C_id}/delete',['as'=>'cotizacion.destroy', 'uses'=>'CotizacionControlador@destroy']);
});
//las vergas dobles...
Route::post('Cotizaciones/GuardarWeb1',['as'=>'Cotizacion.storeWebCorporativa2', 'uses'=>'CotizacionControlador@storeWebCorporativa2']);
Route::post('Cotizaciones/GuardarTienda1',['as'=>'Cotizacion.storeTiendaOnline2', 'uses'=>'CotizacionControlador@storeTiendaOnline2']);
Route::post('Cotizaciones/GuardarDesarrollo1',['as'=>'Cotizacion.storeDesarrolloPersonalizado2', 'uses'=>'CotizacionControlador@storeDesarrolloPersonalizado2']);

//metodos de manipulacion de facturas
Route::get('Facturas/{C_id}/guardar',['as'=>'factura.store', 'uses'=>'FacturasControlador@store']);
Route::get('Facturas',['as'=>'factura.index', 'uses'=>'FacturasControlador@index']);
Route::get('upgrade/{F_id}', ['as' => 'upgrade', 'uses' =>'FacturasControlador@upgrade']);

//manipulacion de usuarios
Route::get('edit',['as'=>'edit', 'uses'=>'usersControlador@edit']);
Route::post('update/{id}',['as'=>'update', 'uses'=>'usersControlador@update']);
Route::get('users/guardar',['as'=>'users.store', 'uses'=>'usersControlador@store']);
Route::group(['middleware'=>'desarrollador'], function () {
		Route::get('Usuarios',['as'=>'users.index', 'uses'=>'usersControlador@index']);
		Route::get('Usuariostag',['as'=>'usuarios.tags.index', 'uses'=>'usersControlador@indextag']);
		//Eliminar
		Route::get('actividades/{Act_id}/{P_id}/delete', ['as'=> 'actividad.delete', 'uses'=>'ProyectoControlador@destroyact']);
		//Cambiar status
		Route::get('actividades/{Act_id}/{P_id}', ['as'=> 'actividad.update', 'uses'=>'ProyectoControlador@updateact']);
	});


//tags
Route::get('Proyectostag',['as'=>'proyectos.tags.index', 'uses'=>'ProyectoControlador@indextag']);
Route::get('Cotizacionestag',['as'=>'cotizaciones.tags.index', 'uses'=>'CotizacionControlador@indextag']);
Route::get('Facturastag',['as'=>'facturas.tags.index', 'uses'=>'FacturasControlador@indextag']);

//elementos index

Route::get('index', ['as'=>'table', 'index'=>'PagesController@index']);
Route::get('Personalizado', ['as'=>'Personalizado', 'uses'=>'PagesController@Personalizado']);
Route::get('Tienda-virtual', ['as'=>'Tienda-virtual', 'uses'=>'PagesController@Tiendavirtual']);
Route::get('Web-corporativa', ['as'=>'Web-corporativa', 'uses'=>'PagesController@Webcorporativa']);
Route::get('contacto', ['as'=>'contacto', 'uses'=>'PagesController@contacto']);
Route::get('Contacto', ['as'=>'Contacto', 'uses'=>'PagesController@contacto']);
Route::get('contacto_DP', ['as'=>'contactoDP', 'uses'=>'PagesController@contactoDP']);



//para login
if(auth()->guest()){ //para usuarios no conectados
	Route::get('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
	Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);

	/*if(auth()-> user() -> tipo_user ==='d'){ //validacion para q un usuario no vea a los usuarios en el sistema
		Route::get('Usuarios',['as'=>'users.index', 'uses'=>'usersControlador@index']);
	}*/

}else{ //para usuarios conectados
	Route::get('login','ProyectoControlador@index');
}

Route::get('logout', ['as' => 'logout', 'uses' =>  'Auth\LoginController@logout']);

//password reset
Route::get('password/email', ['as' => 'password.email', 'uses' =>  'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'password.email', 'uses' =>  'Auth\ForgotPasswordController@sendResetLinkEmail']);
Route::get('password/reset/{token}', ['as' => 'password.reset', 'uses' =>  'Auth\ResetPasswordController@showResetForm']);
Route::post('password/reset', ['as' => 'password.reset', 'uses' =>  'Auth\ResetPasswordController@reset']);




//mail
Route::get('mailpapa', ['as'=>'mail', 'uses'=>'MailControlador@store']);
Route::get('mailpa', ['as'=>'mailtest', 'uses'=>'MailControlador@show']);