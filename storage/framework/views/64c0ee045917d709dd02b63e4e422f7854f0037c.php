<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=".<?php echo e(asset('/img/faces/logo fondo.png')); ?>" />
    <link rel="icon" type="image/png" href="<?php echo e(asset('/img/faces/logo fondo.png')); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Evolve-Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="<?php echo e(asset('/css/bootstrap.min.css')); ?>" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?php echo e(asset('/css/material-dashboard.css?v=1.2.0')); ?>" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link href="<?php echo e(asset('/css/index.css')); ?>" rel='stylesheet' type='text/css'>


</head>

<body>
    <div class="wrapper">
    	<section style="overflow: hidden;">
    		
    	
        <div class="sidebar" data-color="purple" data-image="<?php echo e(asset('/img/logosideblac.png')); ?>">
            <!--
       Barra lateral
    -->
            <div class="logo">
                <a href="" class="">
                    <img class="img-responsive center-block" style="max-height: 130px; max-width: 230px;" src="<?php echo e(asset('/img/faces/logo.png')); ?>" />
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo e(route('proyecto.index')); ?>">
                            <i class="fa fa-lightbulb-o"></i>
                            <p>Tu proyecto</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('cotizacion.index')); ?>">
                            <i class="fa fa-clipboard"></i>
                            <p>Cotizaciones</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('factura.index')); ?>">
                            <i class="fa fa-file-text-o"></i>
                            <p>Facturas</p>
                        </a>
                    </li>
                    <li>
                        <a href="usuarios">
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
                                        <a href="logout">Cerrar sesion</a>
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
                                    <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<h4 style="font-size: 1.1em">                                      
										ID del proyecto <label class="label label-info"> <?php echo e($pro->P_id); ?></label>
                                        
									</h4>
									<p>
										Avance del proyecto
										<br> 
				                        <div class="progress">
							             <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo e($pro->Porcentaje); ?>%" >
							                     <?php echo e($pro->Porcentaje); ?>%
				                        </div>
				                   </div>
									</p>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
								<!--end DINAMICO!-->

							</div>


							<!--Menu principal del proyecto-->
						<div class="card card-nav-tabs">
							<!---->
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
                                                    <a href="#settings" data-toggle="tab">
                                                        <i class="fa fa-building-o"></i> Actividades
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#pendientes" data-toggle="tab">
                                                        <i class="fa fa-bullhorn"></i> Pendientes
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!--seccion de detalles-->
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="profile">
                                            <table class="table" style="min-height:150px;">
                                            <!--DINAMICO!-->
                                                <tbody>
                                                    <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                   <tr>
                                                   	<td>
                                                   		Fecha de Inicio: <?php echo e($proyecto->Fecha_I); ?>

                                                   	</td>
                                                   	<td>
                                                   		Fecha de Entrega: <?php echo e($proyecto->Fecha_E); ?>

                                                   	</td>
                                                   </tr>
                                                   <tr>
                                                   	<td>
                                                   		Categoria: <?php echo e($proyecto->Categoria); ?>

                                                   	</td>
                                                   	<td>
                                                   		Tiempo estimado:
                                                   	</td>
                                                   </tr>
                                                   <tr>
                                                   	<td>
                                                   		Cliente: <?php echo e($proyecto->un); ?> <?php echo e($proyecto->ua); ?>

                                                   	</td>
                                                   	<td>
                                                   		Desarrollador: <?php echo e($proyecto->dn); ?> <?php echo e($proyecto->da); ?>

                                                   	</td>
                                                   </tr>
                                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                            <!--end DINAMICO!-->
                                        </div>
                                        <div class="tab-pane" id="messages" style="min-height:150px;">
                                            <table class="table">
                                            <!--Seccion de muultimedia-->

												<!--DINAMICO!-->
                                                <tbody>
                                                    <tr>
                                                        
                                                        <td>Lines From Great</td>
                                                        <td>multimedia.txt</td>
                                                        <td class="td-actions text-right">
                                                            
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                       
                                                        <td>Flooded: One year later
                                                        </td>
                                                        <td>multimedia.pdf</td>
                                                        <td class="td-actions text-right">
                                                            
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        
                                                        <td>Sign contract fo"</td>
                                                        <td>multimedia.jpg</td>
                                                        <td class="td-actions text-right">
                                                            
                                                            <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                                                <i class="material-icons">close</i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end DINAMICO!-->
                                           
                                           <div><a href="#myModalmult" class="btn btn-outlined btn-primary" data-toggle="modal">Añadir Multimedia</a></div>




                                        </div>
                                        <div class="tab-pane" id="settings" style="min-height:150px;">
                                        <!--Seccion de actividades-->
                                            <!--DINAMICO!-->

											<div class="activity-feed">
											  <div class="feed-item">
											    <div class="date">Sep 25</div>
											    <div class="text">Se subieron archivos multimedia <a href="#messages">Multimedia</a></div>
											  </div>
											  <div class="feed-item">
											    <div class="date">Sep 24</div>
											    <div class="text">Se actualizo el estatus del proyecto”</div>
											  </div>
											  <div class="feed-item">
											    <div class="date">Sep 23</div>
											    <div class="text">Se cancelo la primera cuota del proyecto<a href="Facturas"> Facturas</a></div>
											  </div>
											  <div class="feed-item">
											    <div class="date">Sep 21</div>
											    <div class="text">Comenzaste tu proyecto<a href="single-need.php">“ID nro ”</a></div>
											  </div>
											</div>
                                        </div>
                                        	<!--end DINAMICO!-->

                                        <div class="tab-pane" id="pendientes" style="min-height:150px;">
                                        <!--seccion de pendientes-->
										<!--DINAMICO!-->
                                        <div class="error-notice">
								          <div class="oaerror danger">
								            <strong>Pendiente</strong> - Subir Imagenes.
								          </div>
								          <div class="oaerror info">
								            <strong>Pendiente</strong> - Entrega.
								          </div>
								          
								        </div>

								        <!--end DINAMICO!-->



                                        </div>



                                    </div>
                                </div>
                            </div>




						</div>
						<!--Chat-->
						<div class="col-md-3">
                            <div class="card card-profile">
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="<?php echo e(asset('/img/faces/logo fondo.png')); ?>" />
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
                    <form>
                        <input type="file" id="multimedia">
                        <input type="submit" value="Añadir" style="text-align: right; margin: 10px;margin-bottom:10px;" class="btn btn-outlined btn-primary">        
                    </form>               
                </div> 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div>
   <!--  FIN MODAL -->


</body>

<!--   Core JS Files   -->
<script src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/material.min.js')); ?>" type="text/javascript"></script>
<!--  Charts Plugin -->')}}
<script src="<?php echo e(asset('/js/chartist.min.js')); ?>"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo e(asset('/js/arrive.min.js')); ?>"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo e(asset('/js/perfect-scrollbar.jquery.min.js')); ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo e(asset('/js/bootstrap-notify.js')); ?>"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo e(asset('/js/material-dashboard.js?v=1.2.0')); ?>"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo e(asset('/js/demo.js')); ?>"></script>
<script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

    });
</script>

</html>