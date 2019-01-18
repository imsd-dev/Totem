<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicio</title>
	<link href='loguito.png' rel='shortcut icon' type='image/png'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<style type="text/css">	

	body {

		background-color:  	#AEDFFF;
		margin: 50px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	h1 {
		color: #ecf0f1;
		background-color: transparent;		 
		font-weight: normal;
		margin: 14px 15px 0px 15px;
		text-align: center;
	}

	h2 {
	    color: #ecf0f1;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-weight: normal;
		margin: 4px 15px 10px 15px;
		text-align: center;
	}
	@media screen and (min-width: 768px) {
		h4{
			font-size: 29px;
		}
		h6{

			font-size: 20px;
		}
	}
	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		 
		margin: 12px 10px 12px 10px;
	}
	@media screen and (min-width: 350px) {
		#body {
			 
			margin: 12px 12px 12px 12px;
		}
	} 
	#container {margin: 10px;}
	a:hover{text-decoration:none;}
	.modal-lg {max-width: 90%;}

 

	.image {
	  opacity: 1;
	  display: block;
	  height: auto;
	  transition: .5s ease;
	  backface-visibility: hidden;
	}

	.middle {
	  transition: .5s ease;
	  opacity: 0;
	  transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	 
	}

	.containers:hover .image {
	  opacity: 0.3;
	}

	.containers:hover .middle {
	  opacity: 1;
	}
	.sombra{
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		  padding-right: 0px;
		  padding-left: 0px;
		  margin-right:15px;
		  margin-left: 15px;
		  width: 20px;
		  margin-bottom: 50px;
	}

 </style>
</head>
<body >

<div id="container">
	 <div  style="margin-bottom: 50px;" > 
	 <img src="img/Header.png" class="rounded" style="width: 100%"  alt="Header"> 
	 </div>

	<div id="body" >
		<div class="container">
	 		<div class="row" style="text-align: center;">
	 		 	<!--
				<div class="col sombra "   >
					<a href="https://www.santodomingo.cl/"  target="_blank">  
						<img src="img/Portal.png"  class="img-thumbnail" class="image"  alt="Portal">
					</a>
				</div>-->
				<div class="col sombra"  >
					<a  href="https://rsh.ministeriodesarrollosocial.gob.cl/acceso" target="_blank"  >  
						<img src="img/RSH.PNG" class="img-thumbnail"     alt="Registro Social">
					</a>
				</div>
				<div class="col sombra"  >
					<a  href="http://santodomingo.filedom.cl/solicitud_certificados/" target="_blank"  > 
						<img src="img/Certificados DOM.PNG" class="img-thumbnail"  alt="Certificados DOM">
					</a>
				</div>
				<div class="w-100"></div>

				<div class="col sombra"  >
					<a  href="https://claveunica.gob.cl/activar" target="_blank"  > 
						<img src="img/ClaveUnica.png" class="img-thumbnail"  alt="Clave Unica">
					</a>
				</div>

				<div class="col sombra"  >
					<a  href="http://santodomingo.filedom.cl/edif/" target="_blank"  > 
						<img src="img/Expedientes DOM.PNG" class="img-thumbnail"    alt="Expedientes DOM">
					</a>
				</div>
				<!--
					<div class="col" style="margin-bottom: 50px;">
						 <a  href="https://santodomingo.chilesinpapeleo.cl/autenticacion/login_openid?redirect=https://santodomingo.chilesinpapeleo.cl/tramites/iniciar/5264" target="_blank"  > 
						 	<img src="img/Audiencia.png" class="img-thumbnail" width="100%" alt="Clave Unica">						 
						</a>
					</div> 
				-->

				<div class="w-100"></div>

				<div class="col sombra" >
					 <a  href="https://docs.google.com/forms/d/e/1FAIpQLScbYxL-WuK6qDMhxOEQ3iGqqWFIGAZzwHVQMDJb5ZgR1dbRyw/viewform" target="_blank"  >  
						<img src="img/OIRS.png" class="img-thumbnail"   alt="OIRS">
					</a>
				</div>
				<div class="col sombra"  >
					 <a  href="https://goo.gl/forms/Ikgaf9WgPJdBJKxz1" target="_blank"  >
						<img src="img/Servicio.png" class="img-thumbnail"  alt="Servicio">							 
					</a>
				</div>

				<div class="w-100"></div>

				<div class=" col sombra"    >
					 
					
				 
				</div>
				 
				 <div class="col  ">
				 	

				 </div>



			</div>
		</div>

		<!-- Portal institucional -->
		<div class="modal fade" id="muni"      tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg"  role="document">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body" >
		      	<iframe src="https://www.santodomingo.cl/" style="width: 100%; height: 1500px;">
				  <p>El navegador no soporta Iframes</p>
				</iframe>
		      </div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Registro Social de Hogaresl -->
		<div class="modal fade" id="registro"  tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg"  role="document">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		       <div class="modal-body" >
		      	<iframe src="https://rsh.ministeriodesarrollosocial.gob.cl/acceso" style="width: 100%; height: 1500px;">
				  <p>El navegador no soporta Iframes</p>
				</iframe>
		      </div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Activar Clave Única -->
		<div class="modal fade" id="clave"  tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg"  role="document">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body" >
		      	<iframe src="https://claveunica.gob.cl/activar" style="width: 100%; height: 1500px;">
				  <p>El navegador no soporta Iframes</p>
				</iframe>
		      </div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Puntos de interes  -->
		<div class="modal fade" id="puntos"  tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg"  role="document">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body" >
		      	<iframe src="" style="width: 100%; height: 1500px;">
				  <p>El navegador no soporta Iframes</p>
				</iframe>
		      </div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Formulario OIRS Digital  -->
		<div class="modal fade" id="oirs"  tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg"  role="document">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body" >
		      	<iframe src="https://docs.google.com/forms/d/e/1FAIpQLScbYxL-WuK6qDMhxOEQ3iGqqWFIGAZzwHVQMDJb5ZgR1dbRyw/viewform" style="width: 100%; height: 1500px;">
				  <p>El navegador no soporta Iframes</p>
				</iframe>
		      </div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>

		<!-- Portal de Trámites  -->
		<div class="modal fade" id="tramites"  tabindex="-1" role="dialog" aria-hidden="true">
		  <div class="modal-dialog modal-lg"  role="document">
		    <div class="modal-content">
		      <!-- Modal Header -->
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      </div>
		      <!-- Modal body -->
		      <div class="modal-body" >
		      	<iframe src="" style="width: 100%; height: 1500px;">
				  <p>El navegador no soporta Iframes</p>
				</iframe>
		      </div>
		      <!-- Modal footer -->
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
		      </div>
		    </div>
		  </div>
		</div>
	
	</div>	
	


</div>
 
	 <img src="img/Footer.png" style="width: 100%"  alt="Footer"> 
	 
</body>
</html>