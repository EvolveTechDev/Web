<!DOCTYPE html>
<html lang="ES-ve">
<head>
	<title>Página web | EVOLVE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/index2.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('v.js/v.css')); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/eblue.png')); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
	<style type="text/css">
		#duplex li {
			background: url(<?php echo e(URL::asset('img/qw.png')); ?>) top left no-repeat;
			background-size: 3%;
			background-position: 1px;
			padding-left: 30px;
			list-style-type: none;
		}
		
		#headImg {
			width: 100vw;
			height: 40vh;
			position: relative;
		}
		
		#headImg img {
			width: 100vw;
			height: 100%
		}
		
		#headImg div {
			position: absolute;
			font-size: 3.5em;
			font-weight: bold;
			color: #eee;
			text-shadow: 0em 0em 1em #333;
		}
		
		h1 {
			text-align: center;
			font-size: 4em;
			margin-top: .3em;
		}
		
		#duplex {
			align-items: center;
			justify-content: center;
			display: flex;
			position: relative;
		}
		
		@media(max-width:699px) {
			/*little */
			#duplex {
				flex-direction: column;
			}
			#duplex>* {
				z-index: 3;
				width: 100%;
				height: auto;
			}
		}
		
		@media(min-width:700px) {
			/*big*/
			#duplex {
				margin-bottom: 10vh;
			}
			#duplex>* {
				z-index: 3;
				width: 40%;
				height: auto;
			}
			#duplex img {
				transform: scale(1.4);
			}
		}
		
		#duplex img {
			z-index: 3;
			width: 60%;
			height: auto;
		}
		
		h2 {
			text-align: center;
		}
		
		form {
			/*background-image: url('i2/kkk.jpg');*/
			background-attachment: fixed;
			padding-top: 2vh;
			background-size: 100%;
		}
		
		@media(max-width:699px) {
			/*little */
		}
		
		@media(min-width:700px) {
			/*big*/
		}
		
		h3 {
			margin-top: .5em;
			color: white;
			margin-left: 2.5%;
			font-size: 2.4em;
		}
		
		#heading.top {
			color: white!important;
		}
		
		@media(max-width: 700px) {
			#s {
				left: 0!important;
				width: 100vw;
				font-size: 2.4em!important
			}
			#alt,
			#sa {
				display: none
			}
			h1 {
				font-size: 3em
			}
			#price {
				font-size: 2.5em!important
			}
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Cuprum|Russo+One" rel="stylesheet">
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s);
			js.id = id;
			js.src = "https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=339733059810286";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
</head>
<body>
	<header id="heading" class='top'>
		<img src="imgs/logo enano bl.png" id="menuIcon">
		<ul id="deployMenu">
			<li>
				<a class="innerLink" href="#fc">
					Nosotros
				</a>
			</li>
			<li class="pdrop">
				<a class="innerLink" href="#servicios">
					Servicios
				</a>
				<ul class="drop">
					<li><a href="Tienda-virtual">Tienda Virtual</a></li>
					<li><a href="Web-corporativa">Web Corporativa</a></li>
					<li><a href="Personalizado">Personalizado</a></li>
				</ul>
			</li>
			<li>
				<a class="innerLink" href="#como">
					Cómo lo hacemos
				</a>
			</li>
			<li>
				<a href="Contacto">
					Contáctanos
				</a>
			</li>
			<li>
				<a href="login">
					Area de clientes
				</a>
			</li>
		</ul>
	</header>
	<section id="headImg" style="overflow: hidden;">
		<div style="border: 5px solid transparent;border-left-color: silver;animation-duration: 12s;height: 60vw;width: 60vw;border-radius: 50%" class="rotate2"></div>
		<div style="border: 5px solid transparent;border-left-color: silver;animation-duration: 8s;height: 80vw;width: 80vw;border-radius: 50%" class="rotate2"></div>
		<div style="border: 10px solid transparent;border-left-color: silver;animation-duration: 11s;height: 70vw;width: 70vw;border-radius: 50%" class="rotate2"></div>
		<div style="border: 15px solid transparent;border-left-color: silver;animation-duration: 13s;height: 78vw;width: 78vw;border-radius: 50%" class="rotate2"></div>
		<div style="border: 10px solid transparent;border-left-color: silver;animation-duration: 6s;height: 60vw;width: 60vw;border-radius: 50%" class="rotate2"></div>
		<div style="border: 5px solid transparent;border-left-color: silver;animation-duration: 6s;animation-direction: reverse;height: 75vw;width: 75vw;border-radius: 50%" class="rotate2"></div>
		<div style="border: 18px solid transparent;border-left-color: silver;border-right-color: silver;animation-duration:15s;height: 80vh;width: 80vh;border-radius: 50%" class="rotate2"></div>
		<div style="border: 8px solid transparent;border-left-color: silver;animation-direction: reverse;animation-duration: 25s;height: 78vh;width: 78vh;border-radius: 50%" class="rotate2"></div>
		<div style="border: 8px solid transparent;border-left-color: silver;border-top-color: silver;animation-direction: reverse;animation-duration: 5s;height: 45vh;width: 45vh;border-radius: 50%" class="rotate2"></div>
		<div style="border: 7px solid transparent;border-left-color: #ddd;animation-duration: 5s;height: 55vh;width: 55vh;border-radius: 50%" class="rotate2"></div>
		<img src="<?php echo e(asset('img/u3.jpg')); ?>" style="filter: brightness(60%);">
		<div id="s" class="j-animate title" style="top: 50%;left: 50%;font-size: 4em">Contáctanos.</div>
		<!--script type="text/javascript">
			setTimeout(function() {
				document.getElementById('alt').style.opacity='1'
			},1500)
			setTimeout(function() {
				document.getElementById('sa').style.opacity='1'
			},2000)
		</script-->
	</section>
	<div class="breadcrumbs" style="margin-top: 10px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-sm-12">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">Inicio</a>
						</li>
						<li class="breadcrumb-item active">Contáctanos</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="white" style="overflow: hidden">
			<h1 class="title custom-font text-black" style="font-size: 2.5em;margin-bottom: 0; margin-top: 20px;">¿Tienes un proyecto en mente?</h1>
			<h2 class="title custom-font text-black" style="font-size: 2em;margin-top: 10px;">¡Comienza Ahora!</h2>
			<div class="row" style="margin-top: 20px; margin-bottom: 40px;">
				<div class="col-lg-3 col-sm-3 address">
					<section style="border: 2px solid #eee; margin-bottom: 15px; padding: 10px; ">
						<h4 class="title custom-font text-black">Gracias por confiar en nosotros.</h4>
						<address style="margin-top: 20px;">
						En evolve prestamos servicios a cualquier parte de latinoamerica y el mundo. Obtenga asesoria personalizada con nuestros profesionales en el area de su requerimiento de inmediato.
						</address>
					</section>
					<section style="border: 2px solid #eee; margin-bottom: 15px; padding: 10px; margin-top: 30px;">
						<h4 class="title custom-font text-black">Datos de contacto.</h4>
						<p>WhatSapp : (+58) 412-5846439/424-1162133</p>
						<p>
							Información al cliente: <a href=""> info@Evolvetechdev.com</a>
						</p>
						<p>
							Atención al cliente: <a href="">contacto@Evolvetechdev.com</a>
						</p>
						<p>
							Negocios: <a href="">Negocios@Evolvetechdev.com</a>
						</p>
						<p>
							Horario Online : 24 horas al dia.
						</p>
					</section>
				</div>
				<div id="app-tainer" class="col-lg-9 col-sm-9">
					<div class="card">
						<div class="card-header" data-background-color="blue">
							<h4 class="title">Que quieres hacer hoy?</h4>
						</div>
						<div class="card-content table-responsive">
							<header>
								<div id="picker-1" class="active">Proyecto</div>
								<div id="picker-2">Detalles</div>
								<div id="picker-3">Contacto</div>
							</header>
							<section id="proyecto" style="display: flex">
								<div class="contact-switcher" target="app-Tienda">
									<img src="<?php echo e(asset('img/servidef21.png')); ?>">
									<h4>Web Corporativa</h4>
									
								</div>
								<div class="contact-switcher" target="app-Web">
									<img src="<?php echo e(asset('img/servidef22.png')); ?>">
									<h4>Tienda Online</h4>
								</div>
								<div class="contact-switcher" target="app-Desarrollo">
									<img src="<?php echo e(asset('img/servidef23.png')); ?>">
									<h4>Desarrollo Personalizado</h4>
								</div>
							</section>
							<section id="detalles">
								<div id="app-Tienda">
									<div class="contact-form">
										<form role="form" method="post">
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
												<label for="Mensaje">Indicanos algunas paginas de referencia</label>
												<textarea class="form-control" id="mensaje" placeholder="Mensaje" required name="referencia"></textarea>
											</div>
										</form>
									</div>
								</div>
								<div id="app-Web">
									<div class="contact-form">
										<form role="form" method="post">
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
												<label for="Mensaje">Indicanos algunas paginas de referencia</label>
												<textarea class="form-control" id="mensaje" placeholder="Mensaje" required name="pags_ref"> </textarea>
											</div>
										</form>
									</div>
								</div>
								<div id="app-Desarrollo">
									<div class="contact-form">
										<form role="form" method="post">
											<label>
												Escribe los requerimientos de tu producto
											</label>
											<textarea name="personalized-message" class="form-control"></textarea>
										</form>
									</div>
								</div>
								<button class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:right; text-align:right;margin-bottom: 10px;" onclick="transitionHandler()" data-wow-delay="0.7s">Siguiente</button>
								<button class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:left; text-align:left;margin-bottom: 10px;" onclick="fuckGoBack()">Atrás</button>
							</section>
							<section id="contacto">
								<h4 class="title custom-font text-black" style="font-size: 1.3em; margin-bottom: 0px;">
									Su respuesta llegara a su correo en menos de 24 horas.
								</h4>
								<div class="contact-form">
									<form role="form" id="ender">
										<div class="form-group">
											<label for="name">Ingrese su nombre:</label>
											<input class="form-control" type="text" name="name" placeholder="Nombre" required="true"></input>
										</div>
										<div class="form-group">
											<label for="telefono">Ingrese su Telefono:</label>
											<input class="form-control" type="text" name="telefono" placeholder="Telefono" required="true"></input>
										</div>
										<div class="form-group">
											<label for="email">Ingrese su E-mail:</label>
											<input class="form-control" type="email" name="email" placeholder="E-mail" required="true"></input>
										</div>
										<div class="form-group">
											<label for="option">De donde nos escribes?</label>
											<input class="form-control" type="text" id="pais" placeholder="Pais" required name="pais">
										</div>

										<div style="padding-bottom: 1em;float:left; text-align:left;">
											<button class="btn btn-outlined btn-blue2 btn-sm" style="padding-bottom: 1em;float:left; text-align:left;margin-bottom: 10px;" onclick="fuckGoBack()">Atrás</button>
										</div>

										<div style="padding-bottom: 1em;float:right; text-align:right;">
											<button
												class="btn btn-outlined btn-blue2 btn-sm"
												style="
													padding-bottom: 1em;
													float:right;
													text-align:right;
													margin-bottom: 10px;"
												onclick="send()" data-wow-delay="0.7s">
												Enviar
											</button>
										</div>
									</form>
								</div>
							</section>
						</div>
					</div>
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
						
						@keyframes  fadeIn {
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
	<section id="contact">
		<div class="container-fluid">
			<div class="row" style="margin-top: 30px;">
				<div class="col-md-4 col-lg-3">
					<section style="border: 2px solid #eee;margin-top: 15px; margin-bottom: 15px; padding: 10px; background-color: rgba(0,0,0,.65);color: white;">
						<address>
							<h4 class="title custom-font text-black">
								Datos de contacto.
							</h4>
							<p>
								WhatSapp : (+58) 412-5846439/424-1162133
							</p>
							<p>
								Información al cliente: <a href=""> info@Evolvetechdev.com</a>
							</p>
							<p>
								Atención al cliente: <a href="">contacto@Evolvetechdev.com</a>
							</p>
							<p>
								Negocios: <a href="">Negocios@Evolvetechdev.com</a>
							</p>
							<p>
								Horario Online : 24 horas al dia.
							</p>
						</address>
					</section>
				</div>
				<div class="col-md-4 col-lg-3 ml-auto">
					<section>
						<a class="twitter-timeline" adapt_container_width="true" data-height="350" href="https://twitter.com/evolvetechdev">Tweets by evolvetechdev</a>
						<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						<script>
							! function(d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0],
									p = /^http:/.test(d.location) ? 'http' : 'https';
								if (!d.getElementById(id)) {
									js = d.createElement(s);
									js.id = id;
									js.src = p + "://platform.twitter.com/widgets.js";
									fjs.parentNode.insertBefore(js, fjs);
								}
							}(document, "script", "twitter-wjs");
						</script>
					</section>
				</div>
				<div class="col-md-4 col-lg-3 ml-auto">
					<div class="fb-page" data-href="https://www.facebook.com/Evolve-260863767736364/" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="https://www.facebook.com/Evolve-260863767736364/" class="fb-xfbml-parse-ignore">
							<a href="https://www.facebook.com/Evolve-260863767736364/">Evolve</a>
						</blockquote>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div id="logoContainer" class="j-animate j-right">
			<img src="<?php echo e(asset('img/AZUL.png')); ?>">
			<div>
				<div class="iconRS">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="90px" height="90px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
						<g>
							<path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
								C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
								h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z" fill="#333" />
						</g>
					</svg>
				</div>
				<div class="iconRS">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="97.395px" height="97.395px" viewBox="0 0 97.395 97.395" style="enable-background:new 0 0 97.395 97.395;" xml:space="preserve">
						<g>
							<path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
								V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
								h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
								c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
								c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
								H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
								c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z" fill="#333" />
						</g>
					</svg>
				</div>
				<div class="iconRS">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="430.117px" height="430.117px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;" xml:space="preserve">
						<g>
							<path id="Twitter__x28_alt_x29_" d="M381.384,198.639c24.157-1.993,40.543-12.975,46.849-27.876
								c-8.714,5.353-35.764,11.189-50.703,5.631c-0.732-3.51-1.55-6.844-2.353-9.854c-11.383-41.798-50.357-75.472-91.194-71.404
								c3.304-1.334,6.655-2.576,9.996-3.691c4.495-1.61,30.868-5.901,26.715-15.21c-3.5-8.188-35.722,6.188-41.789,8.067
								c8.009-3.012,21.254-8.193,22.673-17.396c-12.27,1.683-24.315,7.484-33.622,15.919c3.36-3.617,5.909-8.025,6.45-12.769
								C241.68,90.963,222.563,133.113,207.092,174c-12.148-11.773-22.915-21.044-32.574-26.192
								c-27.097-14.531-59.496-29.692-110.355-48.572c-1.561,16.827,8.322,39.201,36.8,54.08c-6.17-0.826-17.453,1.017-26.477,3.178
								c3.675,19.277,15.677,35.159,48.169,42.839c-14.849,0.98-22.523,4.359-29.478,11.642c6.763,13.407,23.266,29.186,52.953,25.947
								c-33.006,14.226-13.458,40.571,13.399,36.642C113.713,320.887,41.479,317.409,0,277.828
								c108.299,147.572,343.716,87.274,378.799-54.866c26.285,0.224,41.737-9.105,51.318-19.39
								C414.973,206.142,393.023,203.486,381.384,198.639z" fill="#333" />
						</g>
					</svg>
				</div>
			</div>
		</div>
		<section>
			Copyright ©
			<script type="text/javascript">
				document.write(new Date().getFullYear())
			</script> EVOLVE
		</section>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script>
		(function() {
			const responsiveSize = 700//px
			let responsiveMenu = {
				icon:document.getElementById('menuIcon'),
				ul:document.getElementById('deployMenu')
			}
			responsiveMenu.icon.addEventListener('click',function() {
				if (window.innerWidth >= responsiveSize)
					return
				let style = responsiveMenu.ul.style
				style.marginLeft = style.marginLeft === "0%" ? "-100%" : "0%" ;
			})
			window.addEventListener("resize",function() {
				if (window.innerWidth >= responsiveSize)
					responsiveMenu.ul.style.marginLeft = "0%"
			})
		})()
	</script>
	<script>
		(function(){
			let elementInViewport = function(el) {
				var top = el.offsetTop;
				var left = el.offsetLeft;
				var width = el.offsetWidth;
				var height = el.offsetHeight;

				while(el.offsetParent) {
					el = el.offsetParent;
					top += el.offsetTop;
					left += el.offsetLeft;
				}

				return (
					top < (window.pageYOffset + window.innerHeight) &&
					left < (window.pageXOffset + window.innerWidth) &&
					(top + height) > window.pageYOffset &&
					(left + width) > window.pageXOffset
				);
			}
			let targets
			let checkAll = function() {
				targets.forEach(function(e) {
					if(elementInViewport(e))
						e.classList.add('j-animated')
				})
			}
			document.addEventListener("DOMContentLoaded", function(event) {
				targets = Array.from(document.getElementsByClassName('j-animate'))
				document.addEventListener("scroll",function(){
					checkAll()
				})
				checkAll()
			})
		})()
	</script>
	<script>
		let header = document.getElementById('heading')
		var scroller = function() {
			if (window.scrollY <= window.innerHeight * 0.3) {
				header.classList.add('top')
			} else {
				header.classList.remove('top')
			}
		}
		scroller()
		window.addEventListener('scroll', scroller)
	</script>
</body>
</html>