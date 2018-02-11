<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}



/*<!--									@if($tipo==="D")
										$ruta="Cotizacion.storeDesarrolloPersonalizado2"
									@endif
									@if($tipo==="T")
										$ruta="Cotizacion.storeTiendaOnline2"
									@endif
									@if($tipo==="W")
										$ruta="Cotizacion.storeWebCorporativa2"
									@endif -->*/