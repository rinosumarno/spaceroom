<!DOCTYPE html>
<html>
<head>
	<title>Welcome Admin SpaceRoom</title>
	<link rel="icon" type="image/png" href="<?php echo base_url().'img/pemkot.png' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.dataTables.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/datatable/datatables.js'; ?>"></script>
</head>
<body>
	<nav class="navbar navbar-default" style="background-color: #292c2f" >
		<div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header" >
				
				<img src="<?php echo base_url().'img/pemkot.png'?>" alt="" class="img-responsive logo" style="width:100px; height: 100px;">
			</div>

			<div style="margin-right: 0px; " class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1">
				<ul style="width: 105%; margin-top: -100px;" class="nav navbar-nav">
					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin'; ?>"><span style="color:#5383d3; padding-left: 80px; " class="glyphicon glyphicon-home"></span> Dashboard <span class="sronly"></span></a></li>

					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/user'; ?>"><span style="color:#5383d3; " class="glyphicon glyphicon-user"></span> Data User</a></li>

					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/calendar'; ?>"><span style="color:#5383d3; " class="glyphicon glyphicon-sort"></span> Data Kalender</a></li>

					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/data_booking'; ?>"><span style="color:#5383d3; " class="glyphicon glyphicon-sort"></span> Data Booking</a></li>

					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/slide'; ?>"><span style="color:#5383d3; " class="glyphicon glyphicon-sort"></span> Data Slide Show Home</a></li>

					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/konten'; ?>"><span style="color:#5383d3;" class="glyphicon glyphicon-sort"></span> Edit Konten Tentang</a></li>

					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/konten'; ?>"><span style="color:#5383d3;" class="glyphicon glyphicon-sort"></span> Edit Gallery</a></li>

					<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/logout'; ?>"><span style="color:#5383d3;" class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					<li class="dropdown"><a style="color: #5383d3;" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false"><?php echo "Halo, <b>".$this->session->userdata('nama');?></b> <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url().'admin/ganti_password' ?>"><i class="glyphicon glyphicon-lock"></i> Ganti Password</a></li>
						</ul>
					</li>
						<!--li><a style="color: #ffffff;" href="<?php echo base_url().'admin/data_konfirmasiuser'; ?>"><span style="color:#5383d3; " class="glyphicon glyphicon-folder-open"></span> Data Konfirmasi User</a></li>

						<li><a style="color: #ffffff;" href="<?php echo base_url().'admin/laporan_transaksi'; ?>"><span style="color:#5383d3" class="glyphicon glyphicon-sort"></span> Laporan Data Booking</a></li>

						<!--li><a style="color: #ffffff;" href="<?php echo base_url().'admin/paket'; ?>"><span style="color:#5383d3; " class="glyphicon glyphicon-folder-open"></span> Data Paket Foto</a></li!-->

						<!--li><a style="color: #ffffff;" href="<?php echo base_url().'admin/hasil'; ?>"><span style="color:#5383d3; " class="glyphicon glyphicon-folder-open"></span> Data Galery</a></li!-->
					</ul>
				</li>
			</ul>
			<br>
			<ul class="nav navbar-nav navbar-right">
				
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	
	<script src="<?php echo base_url().'./styleob/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
						<script src="<?php echo base_url().'./styleob/vendor/bootstrap/js/popper.js' ?>"></script>
						<script src="<?php echo base_url().'./styleob/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
						<script src="<?php echo base_url().'./styleob/vendor/select2/select2.min.js' ?>"></script>
						<script src="<?php echo base_url().'./styleob/js/main.js' ?>"></script>
					</script>


    <!-- Javascript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    	<script>window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')</script>
    	<script src="<?php echo base_url().'./perth/js/bootstrap.min.js' ?>"></script>
    	<script src="<?php echo base_url().'./perth/js/wow.min.js' ?>"></script>
    	<script src="<?php echo base_url().'./perth/js/main.js' ?>"></script>