<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
        <title>Camp</title>
        <!----<link href='http://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css'>-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/common.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slider/slider.css" />
		
    </head>
    <body>
		<nav>
			<ul class="nav-content">
				<li class="active"><a >CAMPAMENTOS</a></li>
				<li><a class="">¿QUIENES SOMOS?</a></li>
				<li><a class="noBorder">GALERIA</a></li>
				<li id="divCircle"></li>
				<li><a>PAQUETES</a></li>
				<li><a class="noBorder">CONTACTOS</a></li>
			</ul>
			<!--<a class="circle"><a>-->
			<a class="register">INSCRIPCIONES CANCUN JUNGLE CAMP</a>
			<a id="btnMenu" class="btnMenu"><span<i class="fa fa-bars"></i></span></a>
			
		</nav>
		
		<section id="slider">
			<div style="min-height: 50px;">
				<div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
					top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
					<!-- Loading Screen -->
					<div u="loading" style="position: absolute; top: 0px; left: 0px;">
						<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
								top: 0px; left: 0px; width: 100%; height: 100%;">
						</div>
						<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
							top: 0px; left: 0px; width: 100%; height: 100%;">
						</div>
					</div>
					<!-- Slides Container -->
					<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
						<div>
							<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/red.jpg" />
						</div>
						<div>
							<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/purple.jpg" />
						</div>
						<div>
							<img u="image" src2="<?php echo base_url(); ?>assets/images/slider/blue.jpg" />
						</div>
					</div>
            
					<!-- bullet navigator container -->
					<div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
						<!-- bullet navigator item prototype -->
						<div u="prototype"></div>
					</div>
            
					<!-- Arrow Left -->
					<span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
					</span>
					<!-- Arrow Right -->
					<span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
					</span>
					<!--#endregion Arrow Navigator Skin End -->
					<a style="display: none" href="http://www.jssor.com">Bootstrap Carousel</a>
				</div>
				<!-- Jssor Slider End -->
			</div>
		</section>
		
		<section id="camps">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 camps-content">
					<div class="campsHeader">
						<div class="labelCampsHeader">Campamento escolar</div>
					</div>
					<div class="campsImages">
						<img src="<?php echo base_url(); ?>assets/images/camp/camp1.jpg" /> 
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 camps-content">
					<div class="campsHeader">
						<div class="labelCampsHeader">Campamentos padre e hijos</div>
					</div>
					<div class="campsImages">
						<img src="<?php echo base_url(); ?>assets/images/camp/camp1.jpg" /> 
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 camps-content">
					<div class="campsHeader">
						<div class="labelCampsHeader">Campamento escolar</div>
					</div>
					<div class="campsImages">
						<img src="<?php echo base_url(); ?>assets/images/camp/camp1.jpg" /> 
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 camps-content">
					<div class="campsHeader">
						<div class="labelCampsHeader">Campamentos padre e hijos</div>
					</div>
					<div class="campsImages">
						<img src="<?php echo base_url(); ?>assets/images/camp/camp1.jpg" /> 
					</div>
				</div>
			</div>
			
		</section>
		
		<section id="AboutUs">
			<div class="row bgAboutUs">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutUs-header">
					<label>quienes somos</label>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="row" style="position:relative;">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutUs-body UsLeft">
							<label>Acerca de nosotros</label>
							<p>
								Somos una organización educativa; interdisciplinaria * de profesionales del campismo, abocados 
								a la realización de campamentos cuidadosamente diseñados y evaluados para la formacion de niños, jovenes y adultos.
							</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutUs-body UsLeft">
							<label>NUESTRA MISIÓN</label>
							<p>
								Fomentar la vivecia de valores universales en los participantes, a partir del deporte,
								juegos y demás actividades muy divertidad, pretendiendo altos niveles de calidad en el servicio.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 aboutUs-body UsRight">
							<label>NUESTRA FILOSOFÍA</label>
							<p>
								Creemos que las excursiones, el contacto con la naturaleza, la convivencia armoniosa y organizada;
								así como la alimentacion saludable y el descanso proporcionan en los a acampadores una vida sana y feliz que se
								reflejará en sus vidad.</br>
								Para nosotros, como institución educativa, pasamos que el acampador merece todo nuestro respeto, compresión
								y aceptación y de esa forma serán atendidos y tradatos.</br>
								Nuestros valores son el preofesionalismo, responsabilidad, respeto, honestidad, transparencia, calidad en el servicio y comprensíon.
								Desde su llegada a Cancún Juengle Camp le damos una esmerada atencíon y trato personalizado, pare ello le pedimos que llene
								una ficha de datos personales y su ficha médica para atenderlo mejor.</br></br>
								*pedagogos, Psicólogos, Escultistas y Especialistas del deporte.  
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="galleryCamp">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gallery-header" >
					GALERIA
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gallery-body" >
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 galleryContent" >
							<div class="galleryCircle">
								<p>INSTALACIONES</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 galleryContent" >
							<div class="galleryCircle">
								<p>ACTIVIDADES</p>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</section>
		
		<footer id="contactCamp">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 gallery-header" >
					CONTACTO
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 contact-body" >
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contactInfo" >
							<p>
								SERGIO LECANDA BECKMANN</br>
								CEL.(998) 168 71 96</br>
								TEL. DE OFICINA.</br>
								(998) 8 83 01 11</br>
								(998) 214 83 38
							</p>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contactInfo" >
							<p>
								RESPONSABLE DEL CAMPAMENTO</br>
								(A QUIÉN CONTACTAR DURANTE EL CAMPAMENTO);</br>
								MA. ELENA GALLARDO DE LECANDA</br>
								CEL. 998 214 83 38</br>
								EMAIL. CANCUNJUNGLECAMP@HOTMAIL.COM
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contact-map" >
							<div id="map"></div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 contact-form" >
							<div id="formContactCamp">
								<form data-toggle="validator" role="form">
									<div class="form-group">
										<input type="text" class="form-contact" id="exampleInputEmail1" placeholder="NOMBRE" required>
									</div>
									<div class="form-group">
										<input type="email" class="form-contact" id="exampleInputEmail1" placeholder="EMAIL" required>
									</div>
									<div class="form-group">
										<input type="phone" class="form-contact" id="exampleInputEmail1" placeholder="TELEFONO" required>
									</div>
									<div class="form-group">
										<input type="text" class="form-contact" id="exampleInputEmail1" placeholder="COMPAÑIA" required>
									</div>
									<div class="form-group">
										<textarea class="form-contact" rows="5" placeholder="MESAJE" required></textarea>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-contact btn-lg btn-block">ENVIAR</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxD0i_5oZpoFYP3Issxlr1eYZ5R-3jLBU&callback=initMap"
			async defer></script>
  </body>
</html>
		
	</body>
		
        <script>
        	//var URL_BASE = '<?php echo base_url(); ?>';
    	</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
		
		<script src="<?php echo base_url(); ?>assets/js/slider/docs.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="<?php echo base_url(); ?>assets/js/slider/ie10-viewport-bug-workaround.js"></script>

		<!-- jssor slider scripts-->
		<!-- use jssor.slider.debug.js for debug -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slider/jssor.slider.mini.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/menu.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/home.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/slider/slider.js"></script>
		
</html>