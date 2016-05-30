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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/bootstrap.min.css" />
        
		<!-- Custom CSS -->
		<link href="<?php echo base_url(); ?>assets/css/admin/sb-admin.css" rel="stylesheet">

		<!-- Morris Charts CSS -->
		<link href="<?php echo base_url(); ?>assets/css/admin/plugins/morris.css" rel="stylesheet">

		<!-- Custom Fonts -->
		<!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">-->
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alertify/alertify.core.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/alertify/alertify.default.css" id="toggleCSS" />
		
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/common.css" />
		
		
		
    </head>
    <body>
		
		<div id="wrapper">

			<?php
				$this->load->view('admin/wvHeader');
			?>

			<div id="page-wrapper"  >

				<div class="container-fluid" >

					<!-- Page Heading -->
					<div class="row">
						<div class="col-lg-12">
							<h1 class="page-header">
								Slider
							</h1>
							<ol class="breadcrumb" >
								<li class="active btnBreadcrumb" id="addSlider">
									<i class="fa fa-dashboard"></i> Agregar slider
								</li>
							</ol>
						</div>
					</div>
					<!-- /.row -->

				</div>
				<!-- /#page-wrapper -->
				
				<div class="row" style="display:none;">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
				</div>
				
				<div class="row" id="content-slider">
					<?php
						foreach($slider as $item){
						?>
							<div class="col-md-6">
								<div class="panel-slider">
									<div class="panel-sliderImg">
										<img class="imgSlider"  src="<?php echo base_url(); ?>assets/images/slider/<?php echo $item->name; ?>" />
									</div>
									<div class="panel-sliderInfo">
										<div class="col-md-6">
											<button id="btnDelete<?php echo $item->id; ?>" attr_iden="<?php echo $item->id; ?>"  attr_name="<?php echo $item->name; ?>" class="btnDeleteSlider btn btn-danger  btn-panel btn-lg btn-block" >Eliminar</button>
										</div>
										<div class="col-md-6">
											<button id="" attr_iden="<?php echo $item->id; ?>" attr_name="<?php echo $item->name; ?>" class="btnEditSlider btn btn-primary btn-panel btn-lg btn-block" >Editar</button>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
					?>
				</div>
				
				
			</div>
			
			<div class="loading">
				<div class="content-loading">
					<img u="image" src="<?php echo base_url(); ?>assets/images/712.gif" />
				</div>
			</div>
			
		</div>
		
	</body>
</html>
		
	</body>
		
        <script>
        	var URL_BASE = '<?php echo base_url(); ?>';
    	</script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap/bootstrap.min.js"></script>
		
		<!-- Morris Charts JavaScript -->
		<script src="<?php echo base_url(); ?>assets/js/admin/morris/raphael.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/admin/morris/morris.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/admin/morris/morris-data.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/admin/slider.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/alertify/alertify.min.js"></script>
		
		
</html>