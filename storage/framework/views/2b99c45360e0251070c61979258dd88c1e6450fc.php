
<html>
<head>
	<meta charset='UTF-8'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo e(asset('img/logo solo blanco.png')); ?>">
	<style type="text/css">
		* {
			box-sizing: border-box;
			font-family: 'Open Sans', sans-serif;
			transition-duration:.5s;
		}
		header *{
			font-family: 'Cuprum'
		}
		html{
			position: fixed;
			width: 100%;
			min-width: 100%;
			height:100%;
			margin:0;
			overflow-x: hidden;
			background:linear-gradient(-90deg,#fff 10%,#78C9FA);
			background-size: contain;
		}
		body {
			height:100vh;
			overflow-y: hidden;
			background:linear-gradient(-90deg,#fff 10%,#78C9FA);
			background-size: contain;
			/*
			background:url('https://serofca.000webhostapp.com/WhatsApp%20Image%202017-12-20%20at%201.26.29%20AM.jpeg');
			background-size: cover;
			background-color: rgb(0,15,40);
			background-blend-mode: luminosity;*/
		}
		#center-logo{
			position:absolute;
			top:50%;
			left:55%;
			transform:translate(-50%,-50%);
			height: 30vh;
		}
		@media(max-width:500px){
			#center-logo{
			display: none;
			}
		}
		.wrapper, 
		.container {
			height: 525px;
			width: 337px;
		}
		.wrapper {
			margin: auto;
			position: absolute;
			top: -10px;
			bottom: 0;
			left: 0;
		}
		.container {
			position: relative;
		}
		.container .stencil {
			border: 5px solid #77dff9;
			height: 440px;
			width: 235px;
			transform: matrix(0.85,0.8,-0.08,0.7,19,43);   
			position: absolute;
			z-index: 1;
		}
		.container .stencil .line {
			border: 3px solid #77dff9 ;
			height: 94.6%;
			margin: 11px 0;
			border-right: none;
			border-left: none;
		}
		.container .border-triangle  {
			position: absolute;
			z-index: 10;
			border-top: 257px solid transparent;
			border-left: 337px solid rgba(255,255,255,0.5);
			border-bottom: 268px solid transparent;  
		}
		.container .content-triangle {
			position: absolute;
			left: 12px;
			top: 22px;
			border-top: 235px solid transparent;
			border-left: 307px solid #fff;
			border-bottom: 245px solid transparent;
			z-index: 15;
		}
		.container .content-triangle:before,
		.container .content-triangle:after,
		.container form .title:after {
			content: '';
			position: absolute;
			width: 10px;
			height: 15px;
			border: 1px solid #71d2ec;
			
		}
		.container .content-triangle:before {
			border-bottom: none;
			border-right: none;
			transform: matrix(0.85,0.64,-0,0.7,-295,-203);
		}
		.container .content-triangle:after {
			border-top: none;
			border-right: none;
			transform: matrix(0.85,-0.7,-0,0.7,-295,197);
		}
		.container .enter-triangle-one {
			position: absolute;
			border-top: 90px solid transparent;
			border-left: 135px solid #192042;
			border-bottom: 76px solid transparent;
			transform: rotate(51.5deg);
			bottom: 5px;
			left: 153px;
			z-index: 5;
		}
		.container .enter-triangle-one:before {
			content: '';
			position: absolute;
			border-top: 120px solid transparent;
			border-left: 188px solid #192042;
			border-bottom: 141px solid transparent;
			transform: rotate(4deg);
			bottom: -129px;
			left: -207px;
			-webkit-filter: blur(20px);
			filter: blur(20px);
			z-index: 5;
		}
		.container .enter-triangle-two {
			position: absolute;
			border-top: 111px solid transparent;
			border-left: 108px solid rgba(40, 65, 143, 0.2);
			border-bottom: 47px solid transparent;
			transform: rotate(51deg);
			bottom: 13px;
			left: 148px;
			z-index: 6;
		}
		.container form {
			position: absolute;
			z-index: 20;
			top: 166px;
			left: 30px;
		}
		.container form:before,
		.container form:after,
		.container form .input-inform:before,
		.container form .title:before {
			content: '';
			position: absolute;
			background: rgba(204,204,204,0.13);
			height: 1px;
		}
		.container form:before {
			width: 315px;
			transform: rotate(37.2deg);
			left: -28px;
			top: -11px;
		}
		.container form:after {
			width: 320px;
			left: -31px;
			bottom: 35px;
			transform: rotate(-39deg);
		}
		.container form .title {
			border-bottom: 1px solid #67e2fb;
			padding-bottom: 9px;
			margin: 0 0 30px 9px;
			width: 95px;
		}
		.container form .title:before {
			width: 26px;
			background: #67e2fb;
			top: 58px;
		}
		.container form .title:after {
			border-top: none;
			border-left: none;
			width: 8px;
			height: 9px;
			transform: matrix(0.85,-0.7,0.8,0.6,241,37);
		}
		.container form label {
			display: block;
			color: #6b707d;
			font-size: 20px;
			font-weight: 300;
			line-height: 24px;
		}
		.container form .input-inform:before {
			width: 1px;
			height: 396px;
			left: -5px;
			top: -102px;
		}
		.container form input:focus {
			outline: none;
		}
		.container form label:last-child {
			font-weight: bold;
			letter-spacing: 1px;
		}
		.container form input[type="text"],
		.container form input[type="password"] {
			border: none;
			border-bottom: 1px solid #f2f2f2;
			display: block;
			width: 160px;
			color: #333;
		}
		.container form input[type="text"] {
			padding: 0 0 7px 9px;
		}
		.container form input[type="password"] {
			padding: 17px 0 9px 9px;
		}
		.container form #forgot-pas,
		.container form .enter,
		.container form .enter label,
		.container form #enter {
			cursor: pointer;
			position: relative;
		}
		.container form #forgot-pas {
			color: #c5c5c5;
			background: #fff;
			border: 1px solid #f2f2f2;
			font-size: 7px;
			height: 17px;
			width: 96px;
			top: 6px;
			left: 25px;
		}
		.container form .enter {
			width: 50px;
			height: 50px;
			top: 50px;
			left: 148px;
		}
		.container form .enter label:before {
			content: '\1F512';
			color: rgba(197, 197, 197,0.6);
			left: 10px;
			top: 7px;
			position: relative;
		}
		.container form .enter label:hover:before {
			content: '\1F513';
		}
		.container form #enter {
			color: #fff;
			border: none;
			font-size: 10px;
			background: transparent;
		}

		/*header*/
			body > header{
				position: fixed;
				height: 10vh;
				width: 100vw;
				top: 0;
				left: 0;
				z-index: 99999;
			}
			body > header.top > img{background-color: transparent;}
			body > header > img{
				height: 10vh;
				position: absolute;
				top: 0;
				left: 0;
				background-color: #114a8a;
			}
			body > header > ul{
				padding-left: 0;
				list-style: none;
				display: flex;
				margin-top: 3vh;
				margin-bottom: 3vh;
			}
			@media(max-width:699px){/*little*/
				body > header{background-color: #114a8a;}
				body > header > ul{
					flex-direction: column;
					width: 100%;
					top: 10vh;
					position: fixed;
					margin-top: 0;
					background-color: #114a8a;
					color: white;
					margin-left: -100%;
				}
				body > header > ul > li{
					padding: 1em;
					text-align: center;
					font-size: 1.1em;
				}
				body > header > ul > li:hover{
					background-color: white;
					color: black;
				}
			}
			body > header > ul > li > a{
				transition-duration: 0s;
				color: inherit;
				text-decoration: none;
			}
			@media(min-width:700px){/*big*/
				body > header{
					height: 7vh;
				}
				body > header > img{
					height: 5vh;
					margin-top: 1vh;
					margin-left: 1vh;
				}
				body > header > ul{
					flex-direction: row;
					justify-content: flex-end;
					font-weight: bold;
					margin-top: 2vh;
				}
				body > header > ul > li > a{
					transition-duration: 0s;
					color: inherit;
					text-decoration: none;
				}
				body > header > ul > li:hover .drop{
					display: inline-block;
				}
				body > header > ul > li{
					font-size: 3vh;
					padding-right: 2em;
					position: relative;
				}
				body > header{
					background-color: #114a8a;
					color:white;
				}
				body > header.top img{
					opacity: 0;
				}
				body > header.top{
					background-color: transparent;
					color: #114a8a;
				}
			}
			.pdrop{
				position: relative;
			}
			.top .drop{
				color: #114a8a;
				background-color: transparent;
			}
			.drop{
				display: none;
				position: absolute;
				top: 100%;
				left: 0;
				width: 130%;
				list-style: none;
				color: white;
				background-color: #114a8a;
				animation: mothafuckanimation .5s;
				overflow: hidden;
				z-index: 2;
				padding-left: 0;
			}
			@keyframes  mothafuckanimation{
				from{transform: translateY(-1em);opacity: 0}
				to{transform: translateY(0);opacity: 1}
			}
			.drop li{
				padding-left: 5px;
				color: inherit;
				width: 100%;
			}
			.drop a{
				color: inherit;
				text-decoration: none;
			}
			.drop li:hover{
				background-color: white;
				color: #114a8a;
			}
			@media(min-width: 700px){
				.pdrop:hover .drop{
					display: block;
				}
			}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet">
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
	<img id="center-logo" src="http://serofca.000webhostapp.com/LOGO%20U.png" alt="evolve logo">
	<div id="main-wrapper" class="wrapper">
		<div class="container">
			<div class="stencil">
				<div class="line">
					<div class="line"></div>
				</div>
			</div>
			<div class="border-triangle"></div>
			<div class="content-triangle"></div>
			<div class="enter-triangle-one"></div>
			<div class="enter-triangle-two"></div>

			<!-- onsubmit="return false" -->

			<form  method="post" id="form" action="login" >
				<?php echo csrf_field(); ?>

				<div class="title">
					<label>Evolve</label>
					<label>Ingresar</label>
				</div>
				<div class="input-inform">
					<?php if($errors->has('email')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('email')); ?></strong></span><br>
                	<?php endif; ?>
					<input type="email" name="email" id="email" placeholder="Correo" />
					<?php if($errors->has('password')): ?>
                     <span class="help-block"><strong><?php echo e($errors->first('password')); ?></strong></span><br>
                	<?php endif; ?>
					<input type="password" name="password" id="password" placeholder="Contraseña" />
					<a href="password/email">¿Olvido su contraseña?</a>			
				</div>
				<div class="enter">
					<label for="enter"></label>
					<input type="submit" name="submit" value="Ingresar" id="enter"/>
				</div>
			</form>    
		</div>
	</div>

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
		//525px
		function h() {
			let scaleFactor = (window.innerHeight / 525)*0.9
			//let res = `scale(${height}) translateX(${(height*525)/2})`
			let res = `scale(${scaleFactor})`,
				left= Math.max((525*(scaleFactor-1)),0)/2+'px'
			console.log(left)
			document.getElementById('main-wrapper').style.transform = res
			document.getElementById('main-wrapper').style.left = left
		}
		window.addEventListener('resize',h)
		h()
	</script>
	<section id="spin">
		<div style="border: 5px solid transparent;border-left-color: silver;animation-duration: 12s;                                                    height: 80vh ;width: 80vh "></div>
		<div style="border: 5px solid transparent;border-left-color: silver;animation-duration: 8s;                                                     height: 100vh;width: 100vh"></div>
		<div style="border: 18px solid transparent;border-left-color: silver;border-right-color: silver;animation-duration:15s;                         height: 130vh;width: 130vh"></div>
		<div style="border: 8px solid transparent;border-left-color: silver;animation-direction: reverse;animation-duration: 25s;                       height: 110vh;width: 110vh"></div>
		<div style="border: 8px solid transparent;border-left-color: silver;border-top-color:silver;animation-direction: reverse;animation-duration: 5s;height: 90vh ;width: 90vh "></div>
		<div style="border: 7px solid transparent;border-left-color: silver;animation-duration: 5s;                                                     height: 95vh ;width: 95vh "></div>
	</section>
	<style>
		#spin{
			position: fixed;
			top: 100%;
			left: 100%;
			transform: translate(-50%,-50%);
		}
		#spin div{
			position: absolute;
			top: 50%;
			left: 50%;
			transform:;
			animation-name: rotate;
			animation-timing-function: linear;
			animation-iteration-count: infinite;
			border-radius: 50%;
		}
		@keyframes  rotate{
			from{transform:  translate(-50%,-50%) rotate(0deg)}
			to{transform:  translate(-50%,-50%) rotate(360deg)}
		}
	</style>
</body>
</html>
