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
	<link media="none" onload="if(media!='all')media='all'" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
	<style type="text/css">
		#duplex li { 
			background: url(<?php echo e(URL::asset('img/qw.png')); ?>) top left no-repeat; 
			background-size: 3%;
			background-position: 1px;
			padding-left: 30px;
			list-style-type: none; 
		} 
		#headImg{width: 100vw;height: 66vh;position: relative;}
		#headImg img{width: 100vw;height: 100%}
		#headImg div{
			position: absolute;
			font-size: 3.5em;
			font-weight: bold;
			color: #eee;
			text-shadow: 0em 0em 1em #333;
		}
		h1{
			text-align: center;
			font-size: 4em;
			margin-top: .3em;
		}
		#duplex{
			align-items: center;
			justify-content: center;
			display: flex;
			position: relative;
		}
		@media(max-width:699px){/*little */
			#duplex{
				flex-direction: column;
			}
			#duplex>*{
				z-index: 3;
				width: 100%;
				height: auto;
			}
		}
		@media(min-width:700px){/*big*/
			#duplex{
				margin-bottom: 10vh;
			}
			#duplex>*{
				z-index: 3;
				width: 40%;
				height: auto;
			}
			#duplex img{
				transform: scale(1.4);
			}
		}
		#duplex img{
			z-index: 3;
			width: 60%;
			height: auto;
		}
		h2{
			text-align: center;
		}
		form{
			/*background-image: url('i2/kkk.jpg');*/
			background-attachment: fixed;
			padding-top: 5vh;
			background-size: 100%;
		}
		@media(max-width:699px){/*little */
			input{
				width: 90%;
				margin-left: 0%;
				margin-bottom: 8vh;
				padding: .3em;
				font-size: 1.4em
			}
			textarea{
				font-size: 1.4em;
				margin-left: 0!important;
			}
		}
		@media(min-width:700px){/*big*/
			input{
				width: 30%;
				margin-left: 2.5%;
				margin-bottom: 8vh;
				padding: .6em;
				font-size: 1.05em
			}
		}
		input[type="submit"]{
			width: 70%;
			margin-left: 0%;
			border-radius: 2em 0;
		}
		input[type="submit"]:hover{
			border-radius: 0 2em;
		}
		textarea{
			width: 95%;
			margin-left: 2.5%;
			margin-bottom: 8vh;
			border-radius: 1em;
			padding: 1em;
		}
		h3{
			margin-top: .5em;
			color: white;
			margin-left: 2.5%;
			font-size: 2.4em;
		}
		#heading.top{
			color: white!important;
		}
		@media(max-width: 700px){
			#s{left: 0!important;width: 100vw;font-size: 2.4em!important}
			#alt,#sa{display: none}
			h1{font-size: 3em}
			#price{
				font-size: 2.5em!important
			}
		}

	</style>
	<link href="https://fonts.googleapis.com/css?family=Cuprum|Russo+One" rel="stylesheet">
		<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=339733059810286";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

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
		<div style="border: 5px solid transparent;
				border-left-color: silver;
				animation-duration: 12s;
				height: 60vw;
				width: 60vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 5px solid transparent;
				border-left-color: silver;
				animation-duration: 8s;
				height: 80vw;
				width: 80vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 10px solid transparent;
				border-left-color: silver;
				animation-duration: 11s;
				height: 70vw;
				width: 70vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 15px solid transparent;
				border-left-color: silver;
				animation-duration: 13s;
				height: 78vw;
				width: 78vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 10px solid transparent;
				border-left-color: silver;
				animation-duration: 6s;
				height: 60vw;
				width: 60vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="border: 5px solid transparent;
				border-left-color: silver;
				animation-duration: 6s;
				animation-direction: reverse;
				height: 75vw;
				width: 75vw;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 18px solid transparent;
				border-left-color: silver;
				border-right-color: silver;
				animation-duration:15s;
				height: 80vh;
				width: 80vh;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 8px solid transparent;
				border-left-color: silver;
				animation-direction: reverse;
				animation-duration: 25s;
				height: 78vh;
				width: 78vh;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 8px solid transparent;
				border-left-color: silver;
				border-top-color: silver;
				animation-direction: reverse;
				animation-duration: 5s;
				height: 45vh;
				width: 45vh;
				border-radius: 50%"
			class="rotate2"
			></div>
		<div style="
				border: 7px solid transparent;
				border-left-color: #ddd;
				animation-duration: 5s;
				height: 55vh;
				width: 55vh;
				border-radius: 50%"
			class="rotate2"
			></div>
		</div>
		<img src="<?php echo e(asset('img/stripes.png')); ?>">
		<div id="s" class="j-animate title" style="top: 30%;left: 40%;font-size: 3.5em">Web corporativa</div>
		<div
			id="alt"
			class="j-animate j-right"
			style="top: 50%;left:40%;font-size: 2em;animation-delay: 1s;opacity: 0"
		>¿Quieres darte a conocer en el mundo digital?</div>
		<div
			id="sa"
			class="j-animate"
			style="top: 65%;left:40%;font-size: 2em;animation-delay: 1.9s;opacity: 0"
		>¡Tenemos algo para ti!</div>
		<script type="text/javascript">
			setTimeout(function() {
				document.getElementById('alt').style.opacity='1'
			},1500)
			setTimeout(function() {
				document.getElementById('sa').style.opacity='1'
			},2000)
		</script>
	</section>


<div class="breadcrumbs" style="margin-top: 10px;">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-lg-12 col-sm-12">
            
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="index">Inicio</a></li>
  <li class="breadcrumb-item active">Web corporativa</li>
</ol>
          </div>
        </div>
      </div>
    </div>



	<div id="white" style="position: relative;overflow: hidden">
		<h1 class="title" style="font-size: 2.5em" > Paginas Web adaptadas a tus necesidades.</h1>
		
		<section id="duplex">
			<div style="text-align: center;">
				<img src="<?php echo e(asset('img/homecito.png')); ?>" class="j-animate">
			</div>
			<div class="j-animate j-right" style="text-align: center;">
				<h2 class="title" style="font-size: 1.5em; margin-top: 7px; margin-bottom: 7px;">Web Básica</h2>
				<h2  style="font-size: 1.2em;  margin-top: 7px; margin-bottom: 7px;">Diseño para profesionales y pequeñas empresas</h2>
				<h2  style="font-size: 1.5em;  margin-top: 7px; margin-bottom: 7px;">desde 100$</h2>

				<ul style="font-size: 1.4em;text-align: left;">
					<li>1 - 7 páginas.</li>
					<li>Imágenes de calidad y optimizadas.</li>
					<li>Seo Basico.</li>
					<li>Formulario de contacto.</li>
					<li>Integracion a Redes Sociales.</li>
					<li>Cuenta Google Analytics.</li>
					<li>Cuenta Google MyBusiness.</li>
					<li>Soporte tecnico 3 meses.</li>
				</ul>
				<a href="#contact" 
					style="
						text-decoration: none;
						position: relative;
						background-color: #114a8a;
						color: white;
						font-size: 1.1em;
						padding: .5em;
						border: 0px solid white;
						border-radius: 1em;
						">¡Comienza Ahora!</a>
			</div>

		</section>
		<hr style="width: 80%;border: 1px solid #ddd;margin-bottom: 5vh">
		<section id="duplex">
			<div class="j-animate j-right" style="text-align: center;">
				<h2 class="title" style="font-size: 1.5em; margin-top: 7px; margin-bottom: 7px;">Web Premium</h2>
				<h2  style="font-size: 1.2em;  margin-top: 7px; margin-bottom: 7px;">Diseño para medianas y grandes empresas.</h2>
				<h2  style="font-size: 1.5em;  margin-top: 7px; margin-bottom: 7px;">desde 180$</h2>
				<ul style="font-size: 1.4em;text-align: left;margin-bottom: 1.5em;">
					<li>8 - 20 páginas.</li>
					<li>Imágenes de calidad y optimizadas.</li>
					<li>Seo Basico.</li>
					<li>Integracion a Redes Sociales.</li>
					<li>Sistema Autogestionable.</li>
					<li>Cuenta Google Analytics.</li>
					<li>Cuenta Google MyBusiness.</li>
					<li>Cuenta Google Search Console.</li>
					<li>Soporte tecnico 6 meses.</li>
				</ul>
				<a href="contacto" 
					style="
						text-decoration: none;
						margin-top: 1em;
						position: relative;
						background-color: #114a8a;
						color: white;
						font-size: 1.1em;
						padding: .5em;
						border: 0px solid white;
						border-radius: 1em;
						">¡Comienza Ahora!</a>
			</div>
			<div style="text-align: center;">
				<img src="<?php echo e(asset('img/mansioncita.png')); ?>" class="j-animate">
			</div>
		</section>
		
		<hr style="width: 80%;border: 1px solid #ddd;height: 0">
		<style type="text/css">
			#howDoWe{
				background-color: white;
				color:black;
			}
			@media(min-width: 1000px){
				#howDoWe{
					min-height: 30vh;
				}
				#howDoWe .fa{
					color:gray;
					font-size: 10vw;
				}
				#howDoWe section{
					display: flex;
					justify-content: space-around;
				}
				#howDoWe section>*{
					text-align: center;
					width: 25%;
				}
			}
			@media(max-width: 999px){
				#howDoWe img{
					width: 60%!important;
					margin-left: 20%;
				}
			}
		</style>
		<section style="margin-top: 50px" id="howDoWe">
			<h2 class="title" style="font-size: 1.8em">Todos Nuestros Diseños Incluyen:</h2>
			<section>
				<div style="margin-top: 20px;border-left: 1px solid #ddd;padding: 1em;">
					<figure>
						<img style="width: 40%;"" src="<?php echo e(asset('img/sen.png')); ?>">
						<figcaption style="color: gray;">Diseño a medida</figcaption>
					</figure>
					<p>Analizamos tu negocio, el mercado y la competencia para crear un diseño que presente tu oferta de la mejor manera.</p>
				</div>
				<div style="margin-top: 20px;border-left: 1px solid #ddd;padding: 1em;">
					<figure>
						<img style="width: 40%;"" src="<?php echo e(asset('img/cont.png')); ?>">
						<figcaption style="color: gray;">Diseño Responsive</figcaption>
					</figure>
					<p>Diseñamos tu página para que se adapte al ancho de cada dispositivo permitiendo una correcta visualización y una mejor experiencia de usuario.</p>
				</div>
				<div style="margin-top: 20px;border-left: 1px solid #ddd;padding: 1em;">
					<figure>
						<img style="width: 40%;"" src="<?php echo e(asset('img/anal.png')); ?>">
						<figcaption style="color: gray;">SEO Básico</figcaption>
					</figure>
					<p>Optimizamos tu página web para que consigas un mejor posicionamiento en buscadores.</p>
				</div>
				<div style="margin-top: 20px;border-left: 1px solid #ddd;padding: 1em;">
					<figure>
						<img style="width: 40%;"" src="<?php echo e(asset('img/cali.png')); ?>">
						<figcaption style="color: gray;">Garantía de por vida por errores</figcaption>
					</figure>
					<p>Desarrollamos tu sitio web sin errores, es por eso que no nos da miedo darte una garantía de por vida en caso de que consigas alguno.</p>
				</div>
			</section>
		</section>
	</div>
	<section id="contact">
<div class="container" style="border-radius: 0.5em 0.5em;background-color: rgba(0,0,0,.25); padding: 5px;">
	
<div class="row">


	<div class="col-lg-6">
	<h2 style="font-size: 2.5em; color: white; text-align: center;text-shadow: 5px 5px 5px black;  "> ¿Tienes un proyecto en mente? </h2>
	 
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
			<a class="twitter-timeline" adapt_container_width="true" data-height="350" href="https://twitter.com/evolvetechdev">Tweets by evolvetechdev</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

					<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
		</script>
		</section>
		</div>
		<div class="col-md-4 col-lg-3 ml-auto">
		<div class="fb-page" data-href="https://www.facebook.com/Evolve-260863767736364/"  data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Evolve-260863767736364/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Evolve-260863767736364/">Evolve</a></blockquote></div>
			</div>



		




	<div>




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
	<script type="text/javascript" src="<?php echo e(asset('js/responsiveMenu.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('js/v.js')); ?>"></script>
	<script type="text/javascript">
		let header = document.getElementById('heading')
		var scroller = function() {
			if (window.scrollY<=window.innerHeight*0.66) {
				header.classList.add('top')
			} else {
				header.classList.remove('top')
			}
		}
		scroller()
		window.addEventListener('scroll',scroller)
	</script>
</body>
</html>