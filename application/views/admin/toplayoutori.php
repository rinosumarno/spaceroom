<!DOCTYPE html>
<!--
	ubusina by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mari Pro - Photo Studio</title>
	<link rel="stylesheet" href="<?php echo base_url().'css/font-awesome.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'css1/style.css' ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
	.top-header img.logo {
	}
</style>
</head>
<!-- ====================================================header section -->
<header class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-5 header-logo">
				<br>
				<img src="<?php echo base_url().'img/5.png'?>" alt="" class="img-responsive logo" style="width:250px; height: 100px;">
			</div>

			<div class="col-md-7">
				<nav class="navbar navbar-default">
					
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div><br>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<ul class="nav navbar-nav navbar-right">
					<li><a class="menu" style="left: -160px;" href="<?php echo base_url().'member'?>">Home</a></li>

					<li><a class="menu" style="left: -140px;" href="<?php echo base_url().'galery'?>">Fasilitas & Order</a></li>

					<?php if($this->session->userdata('id_agt')) { ?>
						<!--li><a class="menu " style="left: -160px;" href="<?php echo base_url().'member/booking'?>">Online Booking</a></li-->
					<?php } else {?>

						<!--li><a class="menu "  style="left: -160px;" href="<?php echo base_url().'welcome/login'?>">Online Booking</a></li!-->
						
						<li><a class="menu " style="left: -5px; color: #5383d3;" href="<?php echo base_url().'welcome/login'?>">Login</a></li>
					<?php } ?>
					<?php if($this->session->userdata('id_agt')) { ?>
						<!--li><a class="menu " style="left: -140px;" href="<?php echo base_url().'member/konfirmasibayar'?>">Konfirmasi Bayar</a></li!-->
						<li><a class="menu " style="margin-left: -120px;" href="<?php echo base_url().'member/historybayar'?>">History Booking</a></li>
						<li><a class="dropdown" href="#team" class="dropdown-toggle" data-toggle="dropdown" style="left: -20px;" role="button" aria-haspopup="true" ariaexpanded="false"><div>Hai    <b><?=$this->session->userdata('nama_agt')?> <span class="caret"></span>	
						</b></div></a>
						<ul class="dropdown-menu">
							<center><li><h4><a style="color: black;" href="<?php echo base_url().'member/gantipass'?>"><i class="glyphicon glyphicon-lock" style="color: black;" ></i>    Ganti Password</a></h4></li></center></ul>
						</li>
						<li><a class="menu" style="color: #5383d3; left: -0px;"  href="<?php echo base_url().'admin/logout'?>">Logout</a></li>
						<!--center style="color: black;"><li><h4><?php echo anchor('admin/logout', 'LOGOUT');?></h4></li></center-->
					<?php } else { ?>
					<?php } ?>
				</li>
			</ul>					
<!--li class="dropdown"><a href=""<?php echo base_url().'admin/laporan'; ?> class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false"><span>Hai</span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="glyphicon glyphicon-lock"></i>Ganti Password</a></li-->
						</ul>
					</div><!-- /navbar-collapse -->
				</div><!-- / .container-fluid -->
			</nav>
		</div>
	</div>
</div>
</header>
<br>