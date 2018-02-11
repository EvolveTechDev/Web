<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class FacturasControlador extends Controller
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
        $facturas= DB::table('factura')
        ->join('users','U_id','=','id')
        ->where('U_id',auth()->user()->id)
        ->get(); //aqui filtraremos el id
        return view('Facturas', compact('facturas'));
    }

    public function indextag(Request $request)
    {
        $palabra=$request->input('buscar');
        $facturas= DB::table('factura')
        ->join('users','U_id','=','id')
        ->where('U_id',auth()->user()->id)
        ->Where('C_id',$palabra)
        ->orWhere('estatus','Like',"%$palabra%")
        ->orWhere('F_id',$palabra)
        ->get(); //aqui filtraremos el id
        return view('Facturas', compact('facturas'));
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
    public function store($id) //en el request mandare mi registro con datos
    {
        //
        DB::table('factura')->insert([
            //aqui falta acomodar los request de la forma $request->input('nombre')
            "C_id"=>$id,
            "estatus"=>"Por pagar",
            "linkterminos"=>"www.terminosycondicione.com",
           // "nombreu"=>auth()->user()->name.' '.auth()->user()->apellido,
            "U_id"=>auth()->user()->id,
            "linkfacturas"=>"www.facturaaqui.com"
        ]);
        return redirect()->route('factura.index');
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

    public function upgrade($id){
        $factura= DB::table('factura')
        ->join('users','factura.U_id','=','users.id')
        ->join('cotizacion','factura.C_id','=','cotizacion.C_id')
        ->where('factura.F_id','=',$id)//aqui filtraremos el id
        ->where('factura.U_id',auth()->user()->id)
        ->get();
        return view('upgrade', compact('factura'));
    }
}
