<?php

namespace App\Http\Controllers;
use Mail;
use Session;
use Redirect;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
class MailControlador extends Controller
{

    public function store(/*Request $request*/){
    Mail::send('emails.password',['aja','hola'], function ($msj){
        $msj->subject('Importante');
        $msj->to('jesusvezgag@gmail.com');
        });
    Session::flash('message','algo que servira luego');
    return Redirect::to('home');
    }

    public function show(){
    	return config('app.url');
    }


}
