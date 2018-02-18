<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

   /*
    protected $request;
    public function __construct(Request $request){
        $this->request=$request;
    }
    */
    //
    public function Proyectos(){
    	return view('Proyectos');
    }
    public function Cotizaciones(Request $request){

    	return view('Cotizaciones');
    }
    public function Facturas(){
    	return view('Facturas');
    }
    public function template(){
    	return view('template');
    }
    public function table(){
    	return view('table');
    }
    public function upgrade(){
    	return view('upgrade');
    }
    public function Cotizaciones1(){
        return view('Cotizaciones1');
    }
    public function index(){
    return view('index');
    }
    public function login(){
    return view('login2');
    }
    public function Personalizado(){
    return view('Personalizado');
    }
    public function Tiendavirtual(){
    return view('Tienda-virtual');
    }    
    public function Webcorporativa(){
    return view('Web-corporativa');
    }    
    public function contacto(){
    return view('contacto');
    }
    public function contactoDP(){
    return view('contacto_DP');
    } 
}
