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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slider/slider.css" />
		
    </head>
    <body>
		
		<section id="login">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-6 " id="content">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="MyAccount">
							Mi Cuenta
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="bodyLogin">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="imgLogo">
									<img id="logo" src="<?php echo base_url(); ?>assets/images/camp_logo.png" />
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formLogin ">
									<div class="form-group">
										<label for="exampleInputEmail1">Email</label>
										<input type="email" class="form-control" id="txtEmailUser" placeholder="Email">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formLogin">
									<div class="form-group">
										<label for="exampleInputEmail1">Contraseña</label>
										<input type="password" class="form-control" id="txtPasswordUser" placeholder="Contraseña">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formLoginBTN">
									<div class="form-group">
										<button type="button"  id="btnLogin" class="btn btn-login btn-lg btn-block">ENTRAR</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
  </body>
</html>
		
	</body>
		
        <script>
        	var URL_BASE = '<?php echo base_url(); ?>';
    	</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/login.js"></script>
		
</html>