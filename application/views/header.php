<!DOCTYPE html>
<!--
	ubusina by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Space Room</title>
	<link rel="stylesheet" href="<?php echo base_url().'css/font-awesome.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo base_url().'css/style.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/animate.css' ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
</head>
<!-- ====================================================header section -->
<header class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-3 header-logo">
				<br>
				<!--a href="member"><img src="<?php echo base_url().'img/pemkot.png'?>" alt="" class="img-responsive logo" style="width:100px; height: 100px;"></a!-->
			</div>

			<div class="col-md-9">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div><br>

						<!-- Collect the nav links, forms, and other content for toggling -->
						
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php if($this->session->userdata('nama_agt')) { ?>
								<ul class="nav navbar-nav navbar-right">
									<!--li style="padding:15px;"><a class="menu" href="<?php echo base_url().'member'?>">Home</a></li>

									<li style="padding:15px"><a class="menu" href="<?php echo base_url().'galery'?>">Fasilitas & Booking</a></li>
									<!--li style="padding:15px"><a class="menu " href="<?php echo base_url().'member/historybayar'?>">History Booking</a></li!-->
									<!--li style="padding:15px"><a class="menu" href="<?php echo base_url().'peminjaman/cetak_laporan_paket'?>">Detail Booking</a></li!-->

									<li style="padding:15px"><a class="dropdown" href="#team" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false">Hai  <b> <?=$this->session->userdata('nama_agt')?> <span class="caret"></span>	
									</b></a>
									<ul class="dropdown-menu">
										<center><li><h4><a style="color: black;" href="<?php echo base_url().'member/gantipass'?>"><i class="glyphicon glyphicon-lock" style="color: black;" ></i>    Ganti Password</a></h4></li></center></ul>
									</li>

									<li style="padding:15px"><a class="menu" style="color: #5383d3;"  href="<?php echo base_url().'admin/logout'?>">Logout</a></li>										
								</ul>
							<?php } else{ ?>
								<ul class="nav navbar-nav navbar-right">
									<!--li style="padding:15px;"><a class="menu" href="<?php echo base_url().'member'?>">Home</a></li>

									<li style="padding:15px"><a class="menu" href="<?php echo base_url().'galery'?>">Fasilitas & Booking</a></li>
									<li style="padding:15px"><a class="menu" href="<?php echo base_url().'galery'?>">Cara Booking</a></li!-->
									<!--li style="padding:15px"><a class="menu " style=" color: #5383d3;" href="<?php echo base_url().'welcome/login'?>">Login</a></li>
								</ul>
							<?php } ?>
						</div><!-- /navbar-collapse -->
					</div><!-- / .container-fluid -->
				</nav>
			</div>
		</div>
	</div>
</header>