<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class CotizacionControlador extends Controller
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
        $cotizaciones= DB::table('cotizacion')
        ->where('U_id',auth()->user()->id)
        ->get(); //aqui filtraremos el id
        return view('Cotizaciones1', compact('cotizaciones'));
    }

    public $buscar;

    public function indextag(Request $request)
    {
        $this-> buscar=$request->input('buscar');
        $cotizaciones= DB::table('cotizacion')
        ->where('U_id',auth()->user()->id)
        ->where(function ($query) {
                $palabra=$this-> buscar;
                $query  ->where('moneda','LIKE',"%$palabra%")
                        ->orWhere('C_id',$palabra)
                        ->orWhere('precio',$palabra)
                        ->orWhere('fecha_s',$palabra)
                        ->orWhere('fecha_c',$palabra)
                        ->orWhere('categoria','LIKE',"%$palabra%")
                        ->orWhere('U_id',$palabra);
            })
        ->get();

        return view('Cotizaciones1', compact('cotizaciones'));
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
    public function storeWebCorporativa(Request $request) //en el request mandare mi registro con datos
    {
        //antes de esto hay q hacer lo del plan aqui mismo
        DB::table('cotizacion')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "U_id"=>auth()->user()->id,
            "moneda"=>$request->input('moneda'),
            "precio"=>200,
            "fecha_c"=>Carbon::now(),
            "fecha_s"=>'2018-03-30',
            "categoria"=>$request->input('tipo_web'),
            "estatus"=>"Por pagar",
            "Pl_id"=>1
        ]);

        return redirect()->route('cotizacion.index');
    }

        public function storeWebCorporativa2(Request $request) //en el request mandare mi registro con datos
    {
        //antes de esto hay q hacer lo del plan aqui mismo
        DB::table('cotizacion')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "U_id"=>auth()->user()->id,
            "moneda"=>$request->input('moneda'),
            "precio"=>200,
            "fecha_c"=>Carbon::now(),
            "fecha_s"=>'2018-03-30',
            "categoria"=>$request->input('tipo_web'),
            "estatus"=>"Por pagar",
            "Pl_id"=>1
        ]);

        return redirect()->route('cotizacion.index');
    }

    public function storeTiendaOnline(Request $request) //en el request mandare mi registro con datos
    {
        //antes de esto hay q hacer lo del plan aqui mismo
        DB::table('cotizacion')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "U_id"=>auth()->user()->id,
            "moneda"=>$request->input('moneda'),
            "precio"=>200,
            "fecha_c"=>Carbon::now(),
            "fecha_s"=>'2018-03-30',
            "categoria"=>'Tienda Online',
            "estatus"=>"Por pagar",
            "Pl_id"=>1
        ]);

        return redirect()->route('cotizacion.index');
    }

        public function storeTiendaOnline2(Request $request) //en el request mandare mi registro con datos
    {
        //antes de esto hay q hacer lo del plan aqui mismo
        DB::table('cotizacion')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "U_id"=>auth()->user()->id,
            "moneda"=>$request->input('moneda'),
            "precio"=>200,
            "fecha_c"=>Carbon::now(),
            "fecha_s"=>'2018-03-30',
            "categoria"=>'Tienda Online',
            "estatus"=>"Por pagar",
            "Pl_id"=>1
        ]);

        return redirect()->route('cotizacion.index');
    }

    public function storeDesarrolloPersonalizado(Request $request) //en el request mandare mi registro con datos
    {
        //antes de esto hay q hacer lo del plan aqui mismo
        DB::table('cotizacion')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "U_id"=>auth()->user()->id,
            "moneda"=>$request->input('moneda'),
            "precio"=>200,
            "fecha_c"=>Carbon::now(),
            "fecha_s"=>'2018-03-30',
            "categoria"=>'Desarrollo Personalizado',
            "estatus"=>"Por pagar",
            "Pl_id"=>1
        ]);

        return redirect()->route('cotizacion.index');
    }

        public function storeDesarrolloPersonalizado2(Request $request) //en el request mandare mi registro con datos
    {
        //antes de esto hay q hacer lo del plan aqui mismo
        DB::table('cotizacion')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "U_id"=>auth()->user()->id,
            "moneda"=>$request->input('moneda'),
            "precio"=>200,
            "fecha_c"=>Carbon::now(),
            "fecha_s"=>'2018-03-30',
            "categoria"=>'Desarrollo Personalizado',
            "estatus"=>"Por pagar",
            "Pl_id"=>1
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
        DB::table('factura')
        ->where('C_id', $id)
        ->where('U_id',auth()->user()->id)
        ->delete();

        DB::table('cotizacion')
        ->where('C_id', $id)
        ->where('U_id',auth()->user()->id)
        ->delete();
        return redirect()->route('cotizacion.index');
    }

    public function template($id){
        $cotizaciones= DB::table('cotizacion')
        ->join('users','users.id','cotizacion.U_id')
        ->get()
        ->where('U_id',auth()->user()->id)
        ->where('C_id',$id); //aqui filtraremos el id

        return view('template', compact('cotizaciones'));
    }
}
