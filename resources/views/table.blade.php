<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=".{{asset('/img/faces/logo fondo.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('/img/faces/logo fondo.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Evolve-Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="{{asset('/css/material-dashboard.css?v=1.2.0')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="{{asset('/css/index.css')}}" rel='stylesheet' type='text/css'>


</head>

<body>
    <div class="wrapper">
    	<section style="overflow: hidden;">
    		
    	
        <div class="sidebar" data-color="purple" data-image="{{asset('/img/logosideblac.png')}}">
            <!--
       Barra lateral
    -->
            <div class="logo">
                <a href="" class="">
                    <img class="img-responsive center-block" style="max-height: 130px; max-width: 230px;" src="{{asset('/img/faces/logo.png')}}" />
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{route('proyecto.index')}}">
                            <i class="fa fa-lightbulb-o"></i>
                            <p>Tu proyecto</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('cotizacion.index')}}">
                            <i class="fa fa-clipboard"></i>
                            <p>Cotizaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('factura.index')}}">
                            <i class="fa fa-file-text-o"></i>
                            <p>Facturas</p>
                        </a>
                    </li>
                    @if(auth()-> user() -> tipo_user ==='d')
                    <li>
                        <a href="Usuarios">
                            <i class="fa fa-lightbulb-o"></i>
                            <p>Usuarios</p>
                        </a>

                    </li>
                    @endif
                    
                </ul>
                <!-- Animaciones de la barra lateral-->
        <div style="border: 5px solid transparent;
				border-left-color: silver;
				animation-duration: 12s;
				height: 15vw;
				width: 15vw;
				border-radius: 50%"
			class="rotate2"
		></div>
		<div style="border: 5px solid transparent;
				border-left-color: silver;
				animation-duration: 8s;
				height: 25vw;
				width: 25vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 10px solid transparent;
				border-left-color: silver;
				animation-duration: 11s;
				height: 20vw;
				width: 20vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 15px solid transparent;
				border-left-color: silver;
				animation-duration: 13s;
				height: 23vw;
				width: 23vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 10px solid transparent;
				border-left-color: silver;
				animation-duration: 6s;
				height: 12vw;
				width: 12vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 5px solid transparent;
				border-left-color: silver;
				animation-duration: 6s;
				animation-direction: reverse;
				height: 23vw;
				width: 23vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 18px solid transparent;
				border-left-color: silver;
				border-right-color: silver;
				animation-duration:15s;
				height: 25vh;
				width: 25vh;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 8px solid transparent;
				border-left-color: silver;
				animation-direction: reverse;
				animation-duration: 25s;
				height: 22vh;
				width: 22vh;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 8px solid transparent;
				border-left-color: silver;
				border-top-color: silver;
				animation-direction: reverse;
				animation-duration: 5s;
				height: 7vh;
				width: 7vh;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 7px solid transparent;
				border-left-color: #ddd;
				animation-duration: 5s;
				height: 15vh;
				width: 15vh;
				border-radius: 50%"
			class="rotate2"
			></div>
            </div>

        


		<!--Menu superior-->
        </div>
        </section>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" >
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <!--DINAMICO!-->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">3</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Se agregaron 2 nuevas actividades</a>
                                    </li>
                                    <li>
                                        <a href="#">Se agregaron 3 nuevos pendientes</a>
                                    </li>
                                    <li>
                                        <a href="#">Se actualizo estatus de proyecto</a>
                                    </li>
                                   
                                </ul>
                            </li>
                            <!--end DINAMICO!-->
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="">Modificar Contraseña</a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}">Cerrar sesion</a>
                                        <!-- {{auth()->user()->name}} -->
                                    </li>                                  
                                </ul>
                            </li>
                        </ul>
                       
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                <!--Barra de avance de proyecto-->
                   	<div class="row">
						<div class="col-lg-9">
							<div class="offer offer-info">
								<div class="shape">
									<div class="shape-text">
										<span class="fa fa-home fa-2x"></span>							
									</div>
								</div>
								<!--DINAMICO!-->
								<div class="offer-content">
                                    @foreach($proyectos as $pro)
									<h4 style="font-size: 1.1em">                                      
										ID del proyecto <label class="label label-info"> {{ $pro->P_id }}</label>
                                        
									</h4>
									<p>
										Avance del proyecto
										<br> 
				                        <div class="progress">
							             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:{{ $pro->Porcentaje }}%" >
							                     {{ $pro->Porcentaje }}%
				                        </div>
				                   </div>
									</p>
                                    @endforeach
								</div>
								<!--end DINAMICO!-->

							</div>


						    <!--Menu principal del proyecto-->
						    <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                <li class="active">
                                                    <a href="#profile" data-toggle="tab">
                                                        <i class="fa fa-book"></i> Detalles
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#messages" data-toggle="tab">
                                                        <i class="fa fa-share-square-o"></i> Multimedia
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#actividades" data-toggle="tab">
                                                        <i class="fa fa-building-o"></i> Actividades
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-content">
                                    <div class="tab-content">
                                        <!--seccion de detalles-->
                                        <div class="tab-pane active" id="profile">
                                            <table class="table" style="min-height:150px;">
                                                <tbody>
                                                    @foreach($proyectos as $proyecto)
                                                   <tr>
                                                    <td>
                                                        Fecha de Inicio: {{ $proyecto->Fecha_I }}
                                                    </td>
                                                    <td>
                                                        Fecha de Entrega: {{ $proyecto->Fecha_E }}
                                                    </td>
                                                    <td>
                                                        Categoría: {{ $proyecto->Categoria }}
                                                    </td>
                                                   </tr>
                                                   <tr>
                                                    <td>
                                                        Cliente: {{ $proyecto->un }} {{ $proyecto->ua }}
                                                    </td>
                                                    <td>
                                                        Desarrollador: {{ $proyecto->dn }} {{ $proyecto->da }}
                                                    </td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                            </table>  
                                        </div>
                                        <!-- FIN seccion de detalles-->

                                         <!--Seccion de muultimedia-->
                                        <div class="tab-pane" id="messages" style="min-height:150px;">
                                            <table class="table">
                                                <tbody>
                                                    @foreach($archivos as $archivo)
                                                    <tr>
                                                        <td>{{ $archivo->nombre }}</td>
                                                        <td>{{ $archivo->fecha_carga }}</td>
                                                        <td class="td-actions text-right">
                                                            
                                                            <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                                                <a href="{{route('deletetable', [$archivo->P_id, $archivo->A_id])}}"><i class="material-icons">close</i></a>
                                                            </button>

                                                            <button type="button" rel="tooltip" title="Descargar" class="btn btn-info btn-simple btn-xs">
                                                                <a href="{{route('downloadtable', [$archivo->P_id, $archivo->A_id])}}"> <i class="material-icons">file_download</i></a> 
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endforeach  
                                                </tbody>
                                            </table>
                                           <div><a href="#myModalmult" class="btn btn-outlined btn-primary" data-toggle="modal">Añadir Multimedia</a></div>
                                        </div>
                                         <!-- FIN Seccion de muultimedia-->
                                        <div class="tab-pane" id="actividades" style="min-height:150px;">
                                            <table class="table table-hover table-responsive table-striped">
                                                <thead class="text-warning active">
                                                    <th>Actividad</th>
                                                    <th>Estatus</th>
                                                    <th>Fecha de completación</th>
                                                </thead>
                                                <tbody>
                                                @foreach($proyectos as $proyecto)
                                                    @foreach ($actividades as $act)
                                                    @if($act-> P_id == $proyecto -> P_id)
                                                    <tr>
                                                        <td>{{ $act-> descripcion}}</td>
                                                        @if($act-> estatus === 'p')
                                                            <td>Pendiente</td>
                                                        @else
                                                            <td>Hecho</td>
                                                        @endif
                                                        <td>{{ $act-> fecha_culminacion}}</td>
                                                        <td>
                                                            <button type="button" rel="tooltip" title="Hecho" class="btn btn-info btn-simple btn-xs">
                                                                <a href="{{route('actividad.update', [$act -> Act_id, $proyecto->P_id])}}"><i class="material-icons">done</i></a> 
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <button type="button" rel="tooltip" title="Eliminar" class="btn btn-info btn-simple btn-xs">
                                                                <a href="{{route('actividad.delete', [$act -> Act_id, $proyecto->P_id])}}"><i class="material-icons">delete</i></a>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @endforeach
                                                 @endforeach
                                                </tbody>
                                            </table>
                                            <div><a href="#modalAct" class="btn btn-outlined btn-info" data-toggle="modal">Añadir Actividad</a></div>
                                        </div>
                                        <!--FIN Seccion de actividades-->
                                    </div>
                                </div>
                            </div>
						</div>

						<!--Chat-->
						<div class="col-md-3">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="">
                                        <img class="img" src="{{asset('/img/faces/logo fondo.png')}}" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">Evolution of tecnological develoment</h6>
                                    <h4 class="card-title">Soporte en linea</h4>
                                    <p class="card-content">
                                        Tienes Alguna duda? Contacta con uno de nuestros profesionales inmediatamente, Estamos listos para ayudarte.
                                    </p>
                                    <a href="" class="btn btn-primary btn-round">Chateemos</a>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Chat-->

                   	</div>                  
                </div>
            </div>
            
        </div>
    </div>



    <!--MODAL de subir multimedia-->

    <div id="myModalmult" class="modal fade in">
        <div class="modal-dialog">           
            <div class="modal-content">
 				<div class="modal-header">
			         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
			         <h3 class="modal-title" id="lineModalLabel">Subir multimedia</h3>
		        </div>
                <div class="modal-body">
                    @foreach($proyectos as $proyecto)
                    <form method="POST" action="{{route('savetable',$proyecto->P_id)}}" accept-charset="UTF-8" enctype="multipart/form-data" files=”true”>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="file" id="multimedia" name="file">
                        Nombre del documento:
                        <input type="text" name="nombre"><br>
                        <input type="submit" value="Añadir" style="text-align: right; margin: 10px;margin-bottom:10px;" class="btn btn-outlined btn-primary">        
                    </form>
                    @endforeach               
                </div> 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div>
   <!--  FIN MODAL -->

    <!--MODAL de añadir actividad-->

    <div id="modalAct" class="modal fade in">
        <div class="modal-dialog">           
            <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Cerrar</span></button>
                     <h3 class="modal-title" id="lineModalLabel">Subir actividad</h3>
                </div>
                <div class="modal-body">
                    @foreach($proyectos as $proyecto)
                    <form method="POST" action="{{route('actividad.store', $proyecto->P_id)}}" accept-charset="UTF-8" enctype="multipart/form-data" files=”true” >
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        Descripción de la actividad:
                        <input type="text" name="nombre"><br>
                        <input type="submit" value="Añadir" style="text-align: right; margin: 10px;margin-bottom:10px;" class="btn btn-outlined btn-primary">        
                    </form>
                    @endforeach               
                </div> 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div>
   <!--  FIN MODAL -->


</body>

<!--   Core JS Files   -->
<script src="{{asset('/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->')}}
<script src="{{asset('/js/chartist.min.js')}}"></script>
<!--  Dynamic Elements plugin -->
<script src="{{asset('/js/arrive.min.js')}}"></script>
<!--  PerfectScrollbar Library -->
<script src="{{asset('/js/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('/js/bootstrap-notify.js')}}"></script>
<!-- Material Dashboard javascript methods -->
<script src="{{asset('/js/material-dashboard.js?v=1.2.0')}}"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>