<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Carbon\Carbon;
class ProyectoControlador extends Controller
{

    function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $proyectos= DB::table('proyecto')->get()->where('U_id',auth()->user()->id); //aqui filtraremos el id
        return view('Proyectos', compact('proyectos'));
    }

        public function indextag(Request $request)
    {
        $palabra=$request->input('buscar');
        $proyectos= DB::table('proyecto')->where('U_id',auth()->user()->id)
        ->Where('P_id',$palabra)
        ->orWhere('U_id',$palabra)
        ->orWhere('F_id',$palabra)
        ->orWhere('D_id',$palabra)
        ->orWhere('categoria','Like',"%$palabra%")
        ->orWhere('estatus','Like',"%$palabra%")
        ->orWhere('F_id',$palabra)
        ->orWhere('fecha_i',"%$palabra%")
        ->orWhere('fecha_e',"%$palabra%")
        ->get(); 
        return view('Proyectos', compact('proyectos'));
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
        //
        DB::table('proyecto')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "U_id"=>6,
            "D_id"=>7,
            "Porcentaje"=>"20",
            "Fecha_I"=>Carbon::now(),
            "Fecha_E"=>'2018-03-30',
            "Categoria"=>"Tienda Virtual",
            "Estatus"=>"E",
            "F_id"=>1
        ]);
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

    public function store_act(Request $request)
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
    public function destroyfile($id,$id2)
    {
        //Eliminar archivo
        $file= DB::table('archivo')->where('A_id', $id2)->get();
        foreach ($file as $f) {
            Storage::disk('uploads')->delete($f->nombre);
        }
        //Eliminar registro en BD
        DB::table('archivo')->where('A_id', $id2)->delete();

        return redirect()->route('showtable',$id);
    }
    public function table($id){
        $actividades= DB::table('actividad AS act')
                     ->join('proyecto AS proy', 'proy.P_id', 'act.P_id')
                     ->join('users AS u', 'u.id', 'proy.U_id')
                     ->where('U_id',auth()->user()->id)
                     ->get();

        $proyectos = DB::table('proyecto')
        ->select('u1.name AS un','u2.name AS dn','u1.apellido AS ua', 'u2.apellido AS da', 'proyecto.P_id','proyecto.Categoria','proyecto.Fecha_I','proyecto.Fecha_E','proyecto.Porcentaje')
        ->join('users AS u1','u1.id','proyecto.U_id')
        ->join('users AS u2','u2.id','proyecto.D_id')
        ->where('P_id',$id)
        ->where('U_id',auth()->user()->id)
        ->get();

        $archivos = DB::table('archivo')
        ->where('U_id',auth()->user()->id)
        ->where('P_id',$id)
        ->get();
        return view('table', compact('proyectos','archivos', 'actividades'));
    }


    public function storefile(Request $request, $id) //en el request mandare mi registro con datos
    {
        //Guardar archivo
        $nro = DB::table('archivo')->max('A_id');
        $nro++;
        $file=$request->file('file');
        $nombre=$request->input('nombre').auth()->user()->id.'_'.$id.'_'.$nro;
        $extension = $file->getClientOriginalExtension();
        $filename=$nombre.'.'.$extension;
        $path='\\uploads\\'.$filename;

        \Storage::disk('uploads')->put($filename,  \File::get($file));


        DB::table('archivo')->insert([
            "nombre"=>$filename,
            "ruta"=>$path,
            "fecha_carga"=>Carbon::now(),
            "P_id"=>$id,
            "U_id"=>auth()->user()->id
            ]);
       return redirect()->route('showtable',$id);
   
    }

    public function downloadfile($id,$id2){
        $file= DB::table('archivo')
        ->where('A_id', $id2)
        ->where('U_id',auth()->user()->id)
        ->get();
        foreach ($file as $f) {
            return response()->download(public_path($f-> ruta));
        }
    }
}
