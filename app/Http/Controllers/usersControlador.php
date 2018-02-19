<?php

use App\Http\Controllers\Controller;
namespace App\Http\Controllers;
use App\User2;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Hash;
use Session;
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
    public function edit()
    {   
        return view('auth.edit');
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
        if(!empty($request->input('password1'))){ //con contraseña
            $user= User2::find($id);

            $pass=$request->input('password1');
            $passnew=$request->input('password2');
            if(Hash::check($pass, $user->password)){
                if ($user->email==$request->input('email')){ //mismo correo para quitar el unique
                    $this->validate($request,[
                        'name'=> 'required|min:5|max:30',
                        'email' => 'required|email|max:30',
                        'apellido'=> 'required|min:5|max:30',
                        'cedula'=> 'required|min:5|max:30',
                        'pais'=> 'required|min:3|max:20',
                        'password2'=> 'required|min:6|max:30'
                        ]);
                    }else{
                        $this->validate($request,[
                        'name'=> 'required|min:5|max:30',
                        'email' => 'required|email|max:30|unique:users',
                        'apellido'=> 'required|min:5|max:30',
                        'cedula'=> 'required|min:5|max:30',
                        'pais'=> 'required|min:3|max:20',
                        'password2'=> 'required|min:6|max:30'
                        ]);

                    }
                $user->apellido=$request->input('apellido');
                $user->cedula=$request->input('cedula');
                $user->email=$request->input('email');
                $user->name=$request->input('name');
                $user->password=bcrypt($passnew);
                $user->updated_at=Carbon::now();
                $user->pais=$request->input('pais');
                $user->save();
                return redirect()->route('proyecto.index');
            }else{
                Session::flash('alert-danger', 'Contraseña invalida');
                return redirect()->back();
            }

        }else{//solo datos sin contraseña
            $user= User2::find($id);
            if ($user->email==$request->input('email')){ //mismo correo para quitar el unique
                 $this->validate($request,[
                        'name'=> 'required|min:5|max:30',
                        'email' => 'required|email|max:30',
                        'apellido'=> 'required|min:5|max:30',
                        'cedula'=> 'required|min:5|max:30',
                        'pais'=> 'required|min:3|max:20'
                        ]);
            }else{
                 $this->validate($request,[
                        'name'=> 'required|min:5|max:30',
                        'email' => 'required|email|max:30|unique:users',
                        'apellido'=> 'required|min:5|max:30',
                        'cedula'=> 'required|min:5|max:30',
                        'pais'=> 'required|min:3|max:20'
                        ]); 
                } 
                    $user->apellido=$request->input('apellido');
                    $user->cedula=$request->input('cedula');
                    $user->email=$request->input('email');
                    $user->name=$request->input('name');
                    $user->updated_at=Carbon::now();
                    $user->pais=$request->input('pais');
                    $user->save();
                    return redirect()->route('proyecto.index');
            
        }
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