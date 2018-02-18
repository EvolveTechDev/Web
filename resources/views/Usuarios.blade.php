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
                    <li>
                        <a href="Proyectos">
                            <i class="fa fa-lightbulb-o"></i>
                            <p>Tu proyecto</p>
                        </a>
                    </li>
                    <li>
                        <a href="Cotizaciones">
                            <i class="fa fa-clipboard"></i>
                            <p>Cotizaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="Facturas">
                            <i class="fa fa-file-text-o"></i>
                            <p>Facturas</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="Usuarios">
                            <i class="fa fa-lightbulb-o"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                    
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

        


		
        </div>
        </section>

        <!--Menu superior-->
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
                                        <a href="{{route('edit',auth()->user()->id)}}">Editar Perfil</a>
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

                        
                
                   <!--TAbla de proyectos-->
                    <div class="row">
                        <div class="col-lg-9 col-md-12">
                        <div class="form-group">
                            <form role="form" method="get" action="{{route('usuarios.tags.index')}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input class="form-control" type="text" id="text" placeholder="Buscar" required="" name="buscar">
                                    <input class="btn btn-outlined btn-primary" style="padding-bottom: 1em;float:right; text-align:right;margin-bottom: 10px;" type="submit" value="Buscar" data-wow-delay="0.7s"></input>
                            </form>
                        </div>
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Usuarios</h4>
                                </div>
                                <!--DINAMICO!-->
                                <div class="card-content table-responsive">
                                    <table class="table table-hover table-responsive table-striped">
                                        <thead class="text-warning active">
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cedula</th>
                                            <th>País</th>
                                            <th>Correo</th>
                                            
                                        </thead>
                                        <tbody>
                                            @foreach($ussers as $u)
                                            <tr>
                                                <td>{{ $u -> id }}</td>
                                                <td>{{ $u -> name }}</td>
                                                <td>{{ $u -> apellido }}</td>
                                                <td>{{ $u -> cedula }}</td>
                                                <td>{{ $u -> pais }}</td>
                                                <td>{{ $u -> email }}</td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!--end DINAMICO!-->
                                </div>
                            </div>
                        </div>
                        <!--chat-->
                        <div class="col-md-3">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{asset('/img/faces/logo fondo.png')}}" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h6 class="category text-gray">Evolution of tecnological develoment</h6>
                                    <h4 class="card-title">Soporte en linea</h4>
                                    <p class="card-content">
                                        Tienes Alguna duda? Contacta con uno de nuestros profesionales inmediatamente, Estamos listos para ayudarte.
                                    </p>
                                    <a id="chat-starter" href="#pablo" class="btn btn-primary btn-round">Chateemos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/js/material.min.js')}}" type="text/javascript"></script>
<!--  Charts Plugin -->
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
<script src="{{asset('/js/add-chat.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>


</html>