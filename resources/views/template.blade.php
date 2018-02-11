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
                        <a href="{{route('proyecto.index')}}">
                            <i class="fa fa-lightbulb-o"></i>
                            <p>Tu proyecto</p>
                        </a>
                    </li>
                    <li  class="active">
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
                        
                    </div><!--DINAMICO!-->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
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
                                <!--end DINAMICO!-->
                            </li>
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
                <!--Menu principal de cotizaciones-->
                    <div class="row">
                        <div class="col-lg-9">
                        
                        <div class="card card-nav-tabs">
                            <!--DINAMICO!-->
                                <div class="card-header" data-background-color="blue">
                                    @foreach ($cotizaciones as $cot)
                                    Cotizacion Nro {{ $cot->C_id }}
                                    @endforeach
                                </div>
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table" style="min-height:150px;margin-bottom: 20px;">
                                                <tbody>
                                                   <tr>
                                                    @foreach($cotizaciones as $co)
                                                    <td>
                                                        Fecha de Solicitud: {{ $co->fecha_s }}
                                                    </td>
                                                    <td>
                                                        Fecha de Caducidad: {{ $co->fecha_c }}
                                                    </td>
                                                   </tr>
                                                   <tr>
                                                    <td>
                                                        Categoria: {{ $co->categoria }}
                                                    </td>
                                                    <td>
                                                        Status: {{ $co->estatus }}
                                                    </td>
                                                   </tr>
                                                   <tr>
                                                    <td>
                                                        Cliente: {{ $co->name }} {{ $co->apellido }}
                                                    </td>
                                                    <td>
                                                        Precio: falta calcular
                                                    </td>
                                                   </tr>
                                                   @endforeach
                                                </tbody>
                                            </table>
                                            <!--end DINAMICO!-->
                                        <div  style="text-align: center;">
                                            <div style="display: inline-block;"><a href="#myModalagree" class="btn btn-outlined btn-success" data-toggle="modal">Aceptar</a></div>
                                            <div style="display: inline-block;"><a href="#myModalcancel" class="btn btn-outlined btn-danger" data-toggle="modal" >Declinar</a></div>
                                        </div>
                                        </div>
                                        

                                     



                                    </div>
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
                                    <a href="#pablo" class="btn btn-primary btn-round">Chateemos</a>
                                </div>
                            </div>
                        </div>





                    </div>



                   
                </div>
            </div>
            
        </div>
                        <!--MODAL de cancelar-->

        <div id="myModalcancel" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header"><!--DINAMICO!-->
                    <h4 class="modal-title">Cotizacion Nro:</h4>
                    <!--end DINAMICO!-->
                </div>
                <div class="modal-body">
                    <h4>Estas seguro que quieres declinar la cotizacion?</h4>
                    <p>Si tienes alguna duda, preguntanos y obten tu respuesta al instante.</p>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    <button class="btn btn-outlined btn-success" data-dismiss="modal"> Volver</button>
                    @foreach ($cotizaciones as $cot)
                     <button class="btn btn-outlined btn-danger" > <a href="{{route('cotizacion.destroy',$cot->C_id)}}">Estoy Seguro</a></button>
                     @endforeach
                        
                    </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div>
                        <!--MODAL de aceptar-->

    <div id="myModalagree" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header"><!--DINAMICO!-->
                    <h4 class="modal-title">Cotizacion Nro:</h4>
                    <!--end DINAMICO!-->
                </div>
                <div class="modal-body">
                    <h4>Comienza Tu proyecto Ahora mismo!</h4>
                    
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                    a<button class="btn btn-outlined btn-success" > <a href="{{route('factura.store',$cot->C_id)}}">Comenzar Ahora!</a></button>
                    <button class="btn btn-outlined btn-danger" data-dismiss="modal"> Volver</button>
                     
                        
                    </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->

    </div>



 
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