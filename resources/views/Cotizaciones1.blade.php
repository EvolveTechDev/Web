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
                    <li class="active">
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
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">3</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                <!--DINAMICO!-->
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
                                <!-- end DINAMICO!-->
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
                        <div class="col-lg-9 col-md-12">
                            <!-- BARRA BUSCAR -->
                            <div class="form-group">
                                <form role="form" method="get" action="{{route('cotizaciones.tags.index')}}">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input class="form-control" type="text" id="text" placeholder="Buscar" required="" name="buscar">
                                    <input class="btn btn-outlined btn-primary" style="padding-bottom: 1em;float:right; text-align:right;margin-bottom: 10px;" type="submit" value="Buscar" data-wow-delay="0.7s"></input>
                                </form>                            
                            </div>
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Tus cotizaciones</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover table-responsive table-striped">
                                        <thead class="text-warning active">
                                            <th>ID cotizacion</th>
                                            <th>Fecha de solicitud</th>
                                            <th>Fecha de caducidad</th>
                                            <th>Precio</th>
                                            <th>Moneda</th>
                                            <th>Categoria</th>
                                            
                                            

                                        </thead>
                                        <tbody>
                                        <!--DINAMICO!-->
                                            @foreach ($cotizaciones as $cotizacion)
                                            <tr>
                                                <td><a href="{{route('template',$cotizacion->C_id)}}">{{ $cotizacion->C_id }}</a></td>
                                                <td>{{ $cotizacion->fecha_c }}</td>
                                                <td>{{ $cotizacion->fecha_s }}</td>
                                                <td>{{ $cotizacion->precio }}</td>
                                                <td>{{ $cotizacion->moneda }}</td>
                                                <td>{{ $cotizacion->categoria }}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <!--end DINAMICO!-->
                                    </table>
                                </div>
                            </div>
                           <div style="text-align: center;width: 100%;padding-bottom: 1em;">
                                <a href="#myModalcancel" class="btn btn-outlined btn-primary" data-wow-delay="0.7s" data-toggle="modal">Agregar Cotizacion</a>
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

                        <div id="myModalcancel" class="modal fade in">

                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                </div>

                                    <div class="modal-body">
                                        <div id="app-tainer">
                                            <div class="card">
                                                <div class="card-header" data-background-color="blue">
                                                    <h4 class="title">Que quieres hacer hoy?</h4>
                                                </div>
                                                <div class="card-content table-responsive">
                                                    <header>
                                                        <div id="picker-1" class="active">Proyecto</div>
                                                        <div id="picker-2">Detalles</div>
                                                    </header>
                                                    <section id="proyecto" style="display: flex">
                                                        <div class="contact-switcher" target="app-Tienda">
                                                            <img src="{{asset('/img/servidef21.png')}}">

                                                            <h4>Web Corporativa</h4>
                                                        </div>
                                                        <div class="contact-switcher" target="app-Web">
                                                            <img src="{{asset('/img/servidef22.png')}}">
                                                            <h4>Tienda Online</h4>
                                                        </div>
                                                        <div class="contact-switcher" target="app-Desarrollo">
                                                            <img src="{{asset('/img/servidef23.png')}}">
                                                            <h4>Desarrollo Personalizado</h4>
                                                        </div>
                                                    </section>
                                                    <section id="detalles">
                                                        <div id="app-Tienda">
                                                            <div class="contact-form">
                                                                <form role="form" method="post" action="{{route('Cotizacion.storeWebCorporativa')}}">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="opcion">Que tipo de pagina deseas?</label>
                                                                            <select class="form-control" name="tipo_web" id="opcion">
                                                                                <option value="personal">Web Personal</option>
                                                                                <option value="corporativa">Web Coporativa</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion2">Cuantas secciones deseas?</label>
                                                                            <select class="form-control" name="cant-secciones" id="opcion2">
                                                                                <option value="1">1</option>
                                                                                <option value="1-3">1-3</option>
                                                                                <option value="3-5">3-5</option>
                                                                                <option value="5-7">5-7</option>
                                                                                <option value="8-12">8-12</option>
                                                                                <option value="12+">12+</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion3">Deseas que tu pagina web sea autoadministrable?</label>
                                                                            <select class="form-control" name="autoadministrable" id="opcion3">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">NO</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion4">Formulario de Contacto</label>
                                                                            <select class="form-control" name="contact-form" id="opcion4">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="opcion5">Diseño de Imagenes personalizadas?</label>
                                                                            <select class="form-control" name="imagenes_propias" id="opcion5">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion6">Diseño de Logotipo?</label>
                                                                            <select class="form-control" name="logo_propio" id="opcion6">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion6">Multi-idioma?</label>
                                                                            <select class="form-control" name="multi_idioma" id="opcion6">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion6">Moneda?</label>
                                                                            <select class="form-control" name="moneda" id="opcion6">
                                                                                <option value="Dolar">Dolar</option>
                                                                                <option value="Bolivar">Bolivar</option>
                                                                                <option value="Euro">Euro</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Mensaje">Indicanos algunas paginas de referencia</label>
                                                                            <textarea class="form-control" id="mensaje" placeholder="Mensaje" required name="referencia"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <input class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:right; text-align:right;margin-bottom: 10px;" type="submit" value="Añadir" data-wow-delay="0.7s"></input>
                                                                    <button class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:left; text-align:left;margin-bottom: 10px;" onclick="fuckGoBack()">Atrás</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div id="app-Web">
                                                            <div class="contact-form">
                                                                <form role="form" method="post" action="{{route('Cotizacion.storeTiendaOnline')}}">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="opcion">Deseas un sistema de catalogos?</label>
                                                                            <select class="form-control" name="catalogo" id="opcion">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="opcion2">Carrito de pago?</label>
                                                                            <select class="form-control" name="carito" id="opcion2">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion3">Gestion de forma de pago?</label>
                                                                            <select class="form-control" name="gestion_pago" id="opcion3">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">NO</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion4">Opciones de Inventario</label>
                                                                            <select class="form-control" name="inventario" id="opcion4">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label for="opcion5">Generacion de facturas?</label>
                                                                            <select class="form-control" name="genera_facturas" id="opcion5">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion6">Multidivisa?</label>
                                                                            <select class="form-control" name="multidivisa" id="opcion6">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion6">Multi-idioma?</label>
                                                                            <select class="form-control" name="multi_idioma" id="opcion6">
                                                                                <option value="s">Si</option>
                                                                                <option value="n">No</option>

                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="opcion6">Moneda?</label>
                                                                            <select class="form-control" name="moneda" id="opcion6">
                                                                                <option value="Dolar">Dolar</option>
                                                                                <option value="Bolivar">Bolivar</option>
                                                                                <option value="Euro">Euro</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="Mensaje">Indicanos algunas paginas de referencia</label>
                                                                            <textarea class="form-control" id="mensaje" placeholder="Mensaje" required name="pags_ref"> </textarea>
                                                                        </div>
                                                                    </div>
                                                                    <input class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:right; text-align:right;margin-bottom: 10px;" type="submit" value="Añadir" data-wow-delay="0.7s"></input>
                                                                    <button class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:left; text-align:left;margin-bottom: 10px;" onclick="fuckGoBack()">Atrás</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div id="app-Desarrollo">
                                                            <div class="contact-form">
                                                                <form role="form" method="post" action="{{route('Cotizacion.storeDesarrolloPersonalizado')}}">
                                                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                                    <div class="form-group">
                                                                            <label for="opcion6">Moneda?</label>
                                                                            <select class="form-control" name="moneda" id="opcion6">
                                                                                <option value="Dolar">Dolar</option>
                                                                                <option value="Bolivar">Bolivar</option>
                                                                                <option value="Euro">Euro</option>
                                                                            </select>
                                                                        </div>
                                                                    <label>
                                                                        Escribe los requerimientos de tu producto
                                                                    </label>
                                                                    <textarea name="personalized-message" class="form-control"></textarea>
                                                                    <input class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:right; text-align:right;margin-bottom: 10px;" type="submit" value="Añadir" data-wow-delay="0.7s"></input>
                                                                    <button class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:left; text-align:left;margin-bottom: 10px;" onclick="fuckGoBack()">Atrás</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">

                                        </div>

                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                            <!-- /.modal-dalog -->
                            <style type="text/css">
                        #app-tainer header {
                            display: flex;
                        }
                        
                        #app-tainer header div {
                            flex-grow: 1;
                            font-size: 1.3em;
                            border-left: 4px solid #114a8a;
                            padding-left: 1em;
                        }
                        
                        #fuck-go-back {
                            color: white;
                            background-color: #114a8a;
                        }
                        
                        #app-tainer header div:first-child {
                            border-left: none;
                        }
                        
                        #app-tainer header div.active {
                            border-bottom: 4px solid #114a8a;
                            color: #114a8a;
                        }
                        
                        #detalles div {}
                        
                        #app-tainer section {
                            display: none;
                            animation: fadeIn 1s;
                            margin-top: 50px;
                        }
                        
                        @keyframes fadeIn {
                            from {
                                opacity: 0
                            }
                            to {
                                opacity: 1
                            }
                        }
                        
                        #proyecto {
                            width: 100%;
                            justify-content: space-around;
                        }
                        
                        #proyecto div {
                            width: 30%;
                            position: relative;
                            text-align: center;
                            cursor: pointer;
                        }
                        
                        @media(max-width: 700px) {
                            #proyecto {
                                flex-direction: column;
                            }
                            #proyecto div {
                                width: 50%;
                                margin-left: 25%;
                            }
                        }
                        
                        #proyecto div img {
                            width: 100%;
                        }
                        
                        #proyecto div:hover {
                            transform: scale(1.1);
                        }
                        
                        #app-tainer > section {
                            display: none;
                            margin-bottom: 15px;
                            padding: 10px;
                            margin-top: 30px;
                        }
                    </style>
                    <script>
                        let bid = e => document.getElementById(e)
                        let counter = 0,
                            target

                        function fuckGoBack() {
                            switch (counter) {
                                case 1:
                                    destinySection.style.display = "none"
                                    document.getElementById(target).style.display = "none"
                                    oldSection.style.display = "flex"
                                    bid('picker-1').classList.add('active')
                                    bid('picker-2').classList.remove('active')
                                    break
                                case 2:
                                    bid('detalles').style.display = 'block'
                                    bid('contacto').style.display = 'none'
                                    bid('picker-2').classList.add('active')
                                    bid('picker-3').classList.remove('active')
                            }
                            counter--
                        }
                        const destinySection = document.getElementById('detalles'),
                            oldSection = document.getElementById('proyecto'),
                            sections = ['Tienda','Web','Desarrollo']

                        function hideSections() {
                            sections.forEach(e=>{
                                bid( 'app-' + e ).style.display = 'none'
                            })
                        }

                        document.addEventListener('DOMContentLoaded', function() {
                            let elements = Array.from(document.getElementsByClassName('contact-switcher'))
                            elements.forEach(function(e) {
                                e.addEventListener('click', function() {
                                    target = e.getAttribute('target')
                                    destinySection.style.display = "block"
                                    hideSections()
                                    document.getElementById(target).style.display = "block"
                                    oldSection.style.display = "none"
                                    bid('picker-1').classList.remove('active')
                                    bid('picker-2').classList.add('active')
                                    counter++
                                })
                            })
                        })
                        function transitionHandler() {
                            bid('detalles').style.display = 'none'
                            bid('contacto').style.display = 'block'
                            bid('picker-2').classList.remove('active')
                            bid('picker-3').classList.add('active')
                            counter++
                        }

                        function serialize(id){
                            return Array.from(bid(id).querySelectorAll('input,textarea,select'))
                                .filter( e => !!e.value )
                                .map( e => encodeURIComponent(e.name)+'='+encodeURIComponent(e.value) )
                                .join('&')
                        }

                        function send() {
                            let parameters = serialize(target) + '&' + serialize('ender') + '&field=' + encodeURIComponent(target)
                            console.log(parameters)
                            fetch('ajaxForm.php?'+parameters)
                                .then(function(res) {
                                    return res.json()
                            }),then(function(json) {
                                if (json.success) {
                                    alert('Mensaje enviado, revise su correo para obtener acceso al sistema.')
                                } else {
                                    alert('error')
                                }
                            }).catch(function() {
                                alert('hubo un error con su petición, verifique su conexión a internet')
                            })
                        }
                    </script>
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