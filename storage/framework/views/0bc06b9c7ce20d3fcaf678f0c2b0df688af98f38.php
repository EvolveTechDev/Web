<!DOCTYPE html>
<html lang="ES-ve">
<head>
	<title>Página web | EVOLVE</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/index2.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('v.js/v.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/css/croc.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Cuprum|Russo+One" rel="stylesheet">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('img/eblue.png')); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
	<!--script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=339733059810286";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script-->
</head>
<body>
	<header id="heading" class='top'>
		<img src="<?php echo e(asset('img/logo enano bl.png')); ?>" id="menuIcon">
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
	<section id="cover">
		<img src="<?php echo e(asset('img/1366.png')); ?>" style="position:absolute;top:0;left:0;width: 100vw;height: 100vh;">
		<script type="text/javascript">
			var animatrixCount = 0
			function animatrix() {
				animatrixCount++
				if (animatrixCount===1) {
					return
				}
				var e = document.getElementById('e'),
					volve = document.getElementById('volve')
				if (1||window.innerWidth>=700) {
					setTimeout(function() {
						volve.style.display='block'
					},1600)
					e.style.display='block'
				}
			}
		</script>
		<img src="<?php echo e(asset('img/b.png')); ?>" id="e" style="display: none;z-index: 50" onload="animatrix()">
		<div id="volveContainer" style="z-index: 50">
			<img src="<?php echo e(asset('img/revolver.png')); ?>" id="volve" style="display: none" onload="animatrix()">
		</div>
		<div
			id="ko"
			style="
				position: absolute;
				left:40vw;
				top:calc(50vh + 3.5vw);
				width: 60vw;
				height: 2em;
				background-color: transparent;
				overflow: visible;
				font-size: 2em
				"
		>
		</div>
		<style type="text/css">
			#ko{
				color: #666;
				animation-name: letterCarouselAnimation;
				animation-duration: 5s;
				animation-timing-function: ease-in-out;
				z-index: 300;
				transform: translateX(-100vw);
			}
			@keyframes  letterCarouselAnimation{
				0%{transform: translateX(100vw)}
				20%{transform: translateX(0vw)}
				80%{transform: translateX(0vw)}
				100%{transform: translateX(-100vw)}
			}
			@-webkit-keyframes letterCarouselAnimation{
				0%{transform: translateX(60vw)}
				20%{transform: translateX(0vw)}
				80%{transform: translateX(0vw)}
				100%{transform: translateX(-100vw)}
			}
		</style>
		<script type="text/javascript">
				if (1) {
					let k = document.getElementById('ko'),
						i = 0,
						l = [
							"Líderes en diseño web en Latinoamérica",
							"Soluciones innovadoras",
							"Páginas web para su negocio",
							"Diseño de Vanguardia"
						],
						duration = 5*1000,
						cover = document.getElementById('cover')
					let func = function() {
						k.parentNode.removeChild(k)
						cover.appendChild(k)
						let u = document.createElement('span')
						u.innerHTML = "<span style='color:transparent'>Q</span>"+l[i++%l.length]
						k.appendChild(u)
						setTimeout(function() {
							k.removeChild(u)
							func()
						},duration)
					}
					func()
				}
		</script>
		<div
			style="border: 5px solid transparent;
				border-left-color: white;
				animation-duration: 12s;
				height: 60vh;
				width: 60vh;
				border-radius: 50%"
			class="rotate"
			></div>
		<div
			style="border: 5px solid transparent;
				border-left-color: white;
				animation-duration: 8s;
				height: 80vh;
				width: 80vh;
				border-radius: 50%"
			class="rotate"
			></div>
		<div
			style="
				border: 18px solid transparent;
				border-left-color: white;
				border-right-color: white;
				animation-duration:15s;
				height: 80vh;
				width: 80vh;
				border-radius: 50%"
			class="rotate"
			></div>
		<div
			style="
				border: 8px solid transparent;
				border-left-color: white;
				animation-direction: reverse;
				animation-duration: 25s;
				height: 78vh;
				width: 78vh;
				border-radius: 50%"
			class="rotate"
			></div>
		<div
			style="
				border: 8px solid transparent;
				border-left-color: white;
				border-top-color: white;
				animation-direction: reverse;
				animation-duration: 5s;
				height: 45vh;
				width: 45vh;
				border-radius: 50%"
			class="rotate"
			></div>
		<div
			style="
				border: 7px solid transparent;
				border-left-color: white;
				animation-duration: 5s;
				height: 55vh;
				width: 55vh;
				border-radius: 50%"
			class="rotate"
			></div>
		<img src="<?php echo e(asset('img/7.png')); ?>"
			style="z-index: 1;animation-duration: 25s;filter: contrast(300%);"
			class="rotate"
			>
		<span
			id="zeroes"
			style="
				position: absolute;
				display: block;
				width: 800%;
				left: 0;
				top: 40%;
				
				color: white;
				font-size: 1.4em;
				"
		></span>
		<span
			id="zeroes2"
			style="
				position: absolute;
				display: block;
				width: 800%;
				left: 25%;
				top: 60%;
				
				color: white;
				font-size: 1.4em;
				transform: rotate(90deg);
				"
		></span>
		<script type="text/javascript">
			z = document.getElementById('zeroes')
			z2 = document.getElementById('zeroes2')
			cant = 2
			setInterval(function() {
				t = ''
				for (var i = 3000; i >= 0; i--) {
					t += Math.floor(Math.random()*100)%2===0?'0':'1';
				}
				z.innerHTML = t
				z2.innerHTML = t
			},300)
		</script>
	</section>
	<span id="fixed-l" class="title" style="border-color: transparent">Evolution of Technological Development</span>
	<section id="fc" style="background-image: url(<?php echo e(URL::asset('img/s2.png')); ?>);background-attachment: fixed;">
		<h2 id="changer" class="title" style="font-size: 3.4em;margin-bottom: 20px"><i style="opacity: 0">q</i><span id="somos">Somos </span> <span id="switcher">EVOLVE</span></h2>
		<script type="text/javascript">
			let switcher = document.getElementById('switcher')
			let phrases  = [
				"Innovación",
				"Progreso",
				"Calidad",
				"EVOLVE"
			]
			function putLetter(i,word) {
				let sp = document.createElement("span")
				sp.innerHTML=word[i]
				sp.classList.add('newLand')
				sp.style.color = 'transparent'
				sp.style.animationDelay = 130*(i+1)
				setTimeout(function() {
					sp.style.color = 'white'
				},130*(i+1))
				switcher.appendChild(sp)
				if (i===word.length-1) {
					return
				}
				putLetter(i+1,word)
			}
			let curr = 0
			setInterval(function(argument) {
				switcher.innerHTML=""
				putLetter(0,phrases[curr])
				curr++
				if (curr===phrases.length) {
					curr=0
				}
			},2500)
		</script>
		<div>
			<img src="<?php echo e(asset('img/iphone.png')); ?>" class="j-animate">
			<div style="position: relative;">
				<hr>
				Desarrollamos soluciones integrales que satisfacen las necesidades de nuestros clientes llevándolos a obtener mejores resultados que impulsen su crecimiento.
				<br>
				En EVOLVE, somos un equipo que se compromete con cada cliente, cada proyecto y cada realidad, buscando siempre la máxima calidad.
				<br>
				<br>
				<div style="text-align: center;width: 100%;padding-bottom: 1em;">
					<a  href="contacto" class="btn btn-outlined btn-white btn-lg"  data-wow-delay="0.7s">¡Comienza Ahora!</a>
				</div>
			</div>
		</div>
	</section>
	<section id="servicios" style="padding-top: 1.5em">
		<h2 class="title">SERVICIOS</h2>
		<div style="font-size: 1.8em;margin-bottom: 20px">Si no estás en Internet, NO existes!</div>
		<section id="cards">
			<a class="j-animate org-left" href="Web-corporativa">
				<img src="<?php echo e(asset('img/servidef1.png')); ?>">
				<section>
					<h4 style="margin-bottom: 0">Web Corporativa</h4>
					<hr width="80%">
					 Una página web es TU imagen en Internet y tu mayor herramienta de venta, por lo que te ofrecemos servicios especializados en el desarrollo y diseño web para que alcances el éxito en Internet.
				</section>
			</a>
			<a class="org-center" href="Tienda-virtual">
				<img src="<?php echo e(asset('img/servidef2.png')); ?>">
				<section>
					<h4 style="margin-bottom: 0">Tienda Online</h4>
					<hr width="80%">
					Si necesitas una herramienta completa para vender tus productos de manera eficaz en Internet, esta es tu solución. Ponemos a tu disposición la plataforma que necesitas, tanto para controlar tu catálogo de productos como para gestionar las ventas y pedidos.
				</section>
			</a>
			<a class="j-animate org-right" href="Personalizado">
				<img src="<?php echo e(asset('img/servidef3.png')); ?>">
				<section>
					<h4 style="margin-bottom: 0">Desarrollo Personalizado</h4>
					<hr width="80%">
					Nuestros diseños son creados desde cero siguiendo especifícamente las necesidades y requerimientos de nuestros clientes con el objetivo de garantizar su satisfacción.
				</section>
			</a>
		</section>
	</section>
	<script>
		if(window.innerWidth*.9 > window.innerHeight)
			document.write(`<div id="sparent">
					<div id="scroll-container">
						<div id="real-inverter">
							<div style="top:5%" >6 - frgtggrfg</div>
							<div style="top:20%">5 - gfrgreger</div>
							<div style="top:35%">4 - grferger</div>
							<div style="top:50%">3 - rfgrsg</div>
							<div style="top:70%">2 - grsfszd</div>
							<div style="top:93%">1 - Solicita tu proyecto</div>
						</div>
						<div id="inverter"></div>
					</div>
					<div id="rocket">
						<img src="https://serofca.000webhostapp.com/llamita6.gif" id="llama">
						<img src="https://serofca.000webhostapp.com/cohetellamita.png" id="cohete">
					</div>
				</div>`)
		let bid = e => document.getElementById(e)
		document.addEventListener('DOMContentLoaded',function(){
			let cont = bid('scroll-container'),
				abs = bid('real-inverter')
			if(!cont)
				return
			cont.addEventListener('scroll',function(e) {
				let containerSize = window.innerHeight*0.6
					elementSize = window.innerHeight*5
				abs.style.top = (cont.scrollTop)+containerSize+'px'
			})
			window.addEventListener('resize',function(e) {
				let containerSize = window.innerHeight*0.6
					elementSize = window.innerHeight*5
				abs.style.top = (cont.scrollTop)+containerSize+'px'
			})
			abs.style.top = (cont.scrollTop)+window.innerHeight*0.6+'px'
		})
		var rand = (n) => {return Math.floor(Math.random()*n)}
		let cvr = document.getElementById('sparent')
		function rsq(argument) {
			let e = document.createElement('span')
			e.style.position='absolute'
			e.style.left=`${rand(100)}vw`
			e.style.top=`${rand(100)}%`
			e.style.width=`${rand(5)}px`
			e.style.height=e.style.width
			e.style.backgroundColor=`rgba(255,255,255,${Math.random()})`
			cvr.appendChild(e)
			setTimeout(function() {
				e.parentNode.removeChild(e);
			},9000)
			setTimeout(rsq,60)
		}
		if(window.innerWidth*.9 > window.innerHeight)
			rsq()
	</script>
	<style>
		#cohete,#llama{left:50vw;position:absolute}#cohete,#llama,#real-inverter{position:absolute}body,html{width:100%;margin:0;padding:0}@media(max-width:700px){#sparent{display:none}}#sparent{margin-top:0;position:relative;overflow:hidden;height:60vh}#cohete{top:8%;transform:translateX(-50%) scaleX(.85);height:75%;z-index:4}#llama{top:0;transform:translateX(-52%) scale(.9);height:100%}#scroll-container{height:60vh;width:100vw;overflow-y:auto}#inverter{width:100%;height:500vh;opacity:.01}#real-inverter{width:100%;height:500vh;background:linear-gradient(black,#001a44,#001a44,#1a3663,#1a3663,#0086ce,#0086ce 93%,#fff 99%);opacity:1;transform:translateY(-100%)}#real-inverter div{background-color:rgba(255,255,255,.8);color:#000;padding:.5em;position:absolute;transform:translateX(-50%);font-size:1.5em;border:3px solid #333;font-family:'Century Gothic';max-width:30%}#real-inverter div:hover{background-color:red;box-shadow:0 0 10px #fff}#real-inverter div:nth-child(even){left:25%}#real-inverter div:nth-child(odd){left:75%}#real-inverter img{width:110vw;height:auto;top:100%;transform:translate(-50%,-100%)}
	</style>
	<section id="idea">
		<h2 class="title" style="font-size: 2.5em; margin-top:30px;">Por qué elegirnos como promotores de tu proyecto?</h2>
		<h3 style="margin-bottom: 60px" >En que  nos diferenciamos de la competencia?</h3>
		<div id="ideac">
			<img id="bg">
			<img src="<?php echo e(asset('img/amarillo.png')); ?>" id="yll">
			<img src="<?php echo e(asset('img/party.png')); ?>" id="party">
		</div>
		<ul>
			<li>Confianza y Comunicación. Te ofrecemos una atención
			las 24 horas y una garantía de errores de por vida.</li><br>

			<li>Servicios a tiempo record. ya que el mejor 
			complemento de la calidad es la velocidad.</li><br>

			<li>Confianza y Comunicación. Te ofrecemos una atención
			las 24 horas y una garantía de errores de por vida.</li>
		</ul>
		<script type="text/javascript">
			let ft = document.getElementById('bg')
			let crocker = function() {
				if (window.innerWidth > 1000) {
					ft.src = "<?php echo e(asset('img/alt.png')); ?>"
				}else{
					ft.src = "<?php echo e(asset('img/ft.png')); ?>"
				}
			}
			crocker()
			window.addEventListener('resize',crocker)
		</script>
	</section>
	<section id="contact">
		<div class="container" style="border-radius: 0.5em 0.5em;background-color: rgba(0,0,0,.25); padding: 5px;">
			<div class="row">
				<div class="col-lg-6">
					<h2 style="font-size: 2.5em; color: white; text-align: center;text-shadow: 5px 5px 5px black;  ">
						¿Tienes un proyecto en mente?
					</h2>
				</div>
				<div class=" col-lg-6">
					<a  href="contacto" class="btn btn-outlined btn-theme btn-lg btn-block"  data-wow-delay="0.7s">¡Comienza Ahora!</a>
				</div>
			</div>
		</div>
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
							!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
						</script>
					</section>
				</div>
				<div class="col-md-4 col-lg-3 ml-auto">
					<div class="fb-page" data-href="https://www.facebook.com/Evolve-260863767736364/"  data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
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
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="90px" height="90px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
						<g>
							<path id="Facebook__x28_alt_x29_" d="M90,15.001C90,7.119,82.884,0,75,0H15C7.116,0,0,7.119,0,15.001v59.998
								C0,82.881,7.116,90,15.001,90H45V56H34V41h11v-5.844C45,25.077,52.568,16,61.875,16H74v15H61.875C60.548,31,59,32.611,59,35.024V41
								h15v15H59v34h16c7.884,0,15-7.119,15-15.001V15.001z"
								fill="#333"/>
						</g>
					</svg>
				</div>
				<div class="iconRS">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="97.395px" height="97.395px" viewBox="0 0 97.395 97.395" style="enable-background:new 0 0 97.395 97.395;"
						xml:space="preserve">
						<g>
							<path d="M12.501,0h72.393c6.875,0,12.5,5.09,12.5,12.5v72.395c0,7.41-5.625,12.5-12.5,12.5H12.501C5.624,97.395,0,92.305,0,84.895
								V12.5C0,5.09,5.624,0,12.501,0L12.501,0z M70.948,10.821c-2.412,0-4.383,1.972-4.383,4.385v10.495c0,2.412,1.971,4.385,4.383,4.385
								h11.008c2.412,0,4.385-1.973,4.385-4.385V15.206c0-2.413-1.973-4.385-4.385-4.385H70.948L70.948,10.821z M86.387,41.188h-8.572
								c0.811,2.648,1.25,5.453,1.25,8.355c0,16.2-13.556,29.332-30.275,29.332c-16.718,0-30.272-13.132-30.272-29.332
								c0-2.904,0.438-5.708,1.25-8.355h-8.945v41.141c0,2.129,1.742,3.872,3.872,3.872h67.822c2.13,0,3.872-1.742,3.872-3.872V41.188
								H86.387z M48.789,29.533c-10.802,0-19.56,8.485-19.56,18.953c0,10.468,8.758,18.953,19.56,18.953
								c10.803,0,19.562-8.485,19.562-18.953C68.351,38.018,59.593,29.533,48.789,29.533z"
								fill="#333"/>
						</g>
					</svg>
				</div>
				<div class="iconRS">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						width="430.117px" height="430.117px" viewBox="0 0 430.117 430.117" style="enable-background:new 0 0 430.117 430.117;"
						xml:space="preserve">
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
								C414.973,206.142,393.023,203.486,381.384,198.639z"
								fill="#333"/>
						</g>
					</svg>
				</div>
			</div>
		</div>
		<section>
			Copyright © <script type="text/javascript">document.write(new Date().getFullYear())</script> EVOLVE
		</section>
	</footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script>
		let header = document.getElementById('heading')
		var scroller = function() {
			if (window.scrollY<=window.innerHeight) {
				header.classList.add('top')
			} else {
				header.classList.remove('top')
			}
		}
		scroller()
		window.addEventListener('scroll',scroller)
		let links = document.querySelectorAll('.innerLink')

		var getAbsPosition = function(el){
			var el2 = el;
			var curtop = 0;
			var curleft = 0;
			if ( document.getElementById || document.all ) {
				do  {
					curleft += el.offsetLeft-el.scrollLeft;
					curtop += el.offsetTop-el.scrollTop;
					el = el.offsetParent;
					el2 = el2.parentNode;
					while (el2 != el) {
						curleft -= el2.scrollLeft;
						curtop -= el2.scrollTop;
						el2 = el2.parentNode;
					}
				} while (el.offsetParent);

			} else if (document.layers) {
				curtop += el.y;
				curleft += el.x;
			}
			return [curtop, curleft];
		};
		for (var i = links.length - 1; i >= 0; i--) {
			links[i].addEventListener('click',function(e) {
				e.preventDefault()
				let element = document.querySelector(this.getAttribute('href'))
				let final = getAbsPosition(element)[0] - Math.floor(window.innerHeight/10)
				let act = window.scrollY
				let toDown = act < final
				let prev = null
				let x = setInterval(function() {
					if (toDown) {
						if (final <= window.scrollY) {
							clearInterval(x)
							prev = null
							return
						}
						window.scrollBy(0,50)
						if (prev!==null&&prev===window.scrollY) {
							clearInterval(x)
							prev = null
							return
						}
						prev = window.scrollY
					}else{
						if (final >= window.scrollY) {
							clearInterval(x)
							prev = null
							return
						}
						window.scrollBy(0,-50)
						if (prev!==null&&prev===window.scrollY) {
							clearInterval(x)
							prev = null
							return
						}
						prev = window.scrollY
					}
				},30)
			})
		}
	</script>
	<script type="text/javascript" src="<?php echo e(asset('js/responsiveMenu.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/v.js')); ?>"></script>
</body>
</html>