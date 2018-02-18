<?php

use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\User2;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class usersControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $ussers= DB::table('users')->get()->where('tipo_user','u'); //aqui filtraremos el id
    return view('Usuarios', compact('ussers'));
    }

    public $buscar;

    public function indextag(Request $request)
    {
    $this-> buscar=$request->input('buscar');
    $ussers= DB::table('users')
    ->where('tipo_user','u')
    ->where(function ($query) {
                $palabra=$this-> buscar;
                $query  ->where('id',$palabra)
            ->orWhere('name','Like',"%$palabra%")
            ->orWhere('apellido','Like',"%$palabra%")
            ->orWhere('pais','Like',"%$palabra%")
            ->orWhere('cedula','Like',"%$palabra%")
            ->orWhere('email','Like',"%$palabra%");
            })
        ->get();

    return view('Usuarios', compact('ussers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "mostrar formulario de creacion de mensaje";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //en el request mandare mi registro con datos
    {
        $user=new User2;
            $user->apellido='Vezga';
            $user->cedula='123452';
            $user->email='jesusvezgag@gmail.com';
            $user->name='Jesus';
            $user->password=bcrypt('12345');
            $user->tipo_user='d';
            $user->updated_at=Carbon::now();
            $user->created_at=Carbon::now();
            $user->pais='Venezuela';
            $user->save();

        return redirect()->route('cotizacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}