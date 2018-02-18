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
<!--
<h1>Saludos para <?php //echo $nombre;?></h1>
-->
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
                    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                        @if(Session::has('alert-' . $msg))
                            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
                        @endif
                    @endforeach 
                   
                    <div class="contact-form">

                                    <form role="form" id="ender" method="post" action="{{route('update',auth()->user()->id)}}">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <div class="form-group">
                                            <label for="name">Nombre</label>
                                            <input class="form-control" type="text" name="name" value="{{auth()->user()->name}}" required="true"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="lastname">Apellido</label>
                                            <input class="form-control" type="text" name="apellido" value="{{auth()->user()->apellido}}"  required="true"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="documento">Documento de identidad o razón social</label>
                                            <input class="form-control" type="text" name="cedula" value="{{auth()->user()->cedula}}"  required="true"></input>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input class="form-control" type="email" name="email" value="{{auth()->user()->email}}"  required="true"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="option">Pais</label>
                                            <input class="form-control" type="text" id="pais" value="{{auth()->user()->pais}}" required name="pais">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña vieja</label>
                                            <input class="form-control" type="password" name="password1" id="password1" placeholder="Ingresa tu contraseña" >
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña nueva</label>
                                            <input class="form-control" type="password" name="password2" id="password2" placeholder="Ingresar tu contraseña" >
                                        </div>


                                        <div style="padding-bottom: 1em;float:left; text-align:left;">
                                           <!-- <button class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:left; text-align:left;margin-bottom: 10px;" onclick="fuckGoBack()">Atrás</button> -->
                                        </div>

                                        <div style="padding-bottom: 1em;float:right; text-align:right;">
                                            <input type="submit" value="Modificar"
                                                class="btn btn-outlined btn-blue2 btn-sm" 
                                                style="
                                                    padding-bottom: 1em;
                                                    float:right;
                                                    text-align:right;
                                                    margin-bottom: 10px;" 
                                                data-wow-delay="0.7s">
                                        </div>
                                    </form>
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
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();




    });
</script>

</html>