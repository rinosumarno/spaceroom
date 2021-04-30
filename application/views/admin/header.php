<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Dashboard">
	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<title> <?php echo $this->session->userdata('nama'); ?> Space Room</title>

	<link rel="icon" type="image/png" href="<?php echo base_url() . 'img/pemkot.png' ?>">
	<link href="<?php echo base_url() . './admn/img/apple-touch-icon.png' ?>" rel="apple-touch-icon">

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() . './admn/lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
	<!--external css-->
	<link href="<?php echo base_url() . './admn/lib/font-awesome/css/font-awesome.css' ?>" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . './admn/css/zabuto_calendar.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . './admn/lib/gritter/css/jquery.gritter.css' ?>" />
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() . './admn/css/style.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url() . './admn/css/style-responsive.css' ?>" rel="stylesheet">
	<script src="<?php echo base_url() . './admn/admn/lib/chart-master/Chart.js' ?>"></script>

	<!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
    ======================================================= -->
</head>

<body>


	<section id="container">
		<!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
		<!--header start-->


		<header class="header black-bg">
			<!--logo start-->
			<a href="<?php echo base_url() . 'admin' ?>" class="logo"><b>WELCOME <SPAN> <?php echo $this->session->userdata('nama'); ?> </span> <span style="color: #42b3e5;">SPACE</span>ROOM</b></a>
			<!--logo end-->
			<div class="nav notify-row" id="top_menu">
				<!--  notification start -->
				<ul class="nav top-menu">
					<!-- settings start -->

				</ul>
				<!--  notification end -->
			</div>
			<div class="top-menu">
				<ul class="nav pull-right top-menu">
					<li><a class="logout" href="<?php echo base_url() . 'admin/logout' ?>">Logout</a></li>
				</ul>
			</div>
		</header>
		<!--header end-->

		<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
					<p class="centered"><a href="<?php echo base_url() . 'admin' ?>"><img src="<?php echo base_url() . '/img/pemkot1.png' ?>" class="img-square" width="75"></a></p>
					<h5 class="centered"><?php echo $this->session->userdata('nama'); ?></h5>
					<li class="mt">
						<a class="active" href="<?php echo base_url() . 'admin' ?>">
							<i class="fa fa-dashboard"></i>
							<span>Dashboard</span>
						</a>
						<div class="container">
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/admin'; ?>">
							<i class="fa fa-user"></i>
							<span>Data Admin </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/user'; ?>">
							<i class="fa fa-user"></i>
							<span>Data User </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/calendar'; ?>">

							<i class="fa fa-cogs"></i>
							<span>Jadwal Booking </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/data_booking'; ?>">
							<i class="fa fa-cogs"></i>
							<span>Data Booking </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/data_batal'; ?>">
							<i class="fa fa-cogs"></i>
							<span>Data Pembatalan </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/slide'; ?>">
							<i class="fa fa-cogs"></i>
							<span>Data slider Home </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/konten'; ?>">
							<i class="fa fa-cogs"></i>
							<span>Data Konten Tentang </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/galery'; ?>">
							<i class="fa fa-cogs"></i>
							<span>Data Gallery </span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/laporan_transaksi' ?>">
							<i class=" fa fa-bar-chart-o"></i>
							<span>Laporan</span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="<?php echo base_url() . 'admin/ganti_password'; ?>">
							<i class="fa fa-cogs"></i>
							<span>Ganti Password </span>
						</a>
					</li>


					<br>
					<br>
					<br>


					<!--sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->



		<!-- **********************************************************************************************************************************************************
  
			<footer end-->
	</section>
	<!-- js placed at the end of the document so the pages load faster -->


	<script src="<?php echo base_url() . './admn/lib/bootstrap/js/bootstrap.min.js' ?>"></script>
	<script class="include" type="text/javascript" src="<?php echo base_url() . './admn/lib/jquery.dcjqaccordion.2.7.js' ?>"></script>
	<script src="<?php echo base_url() . './admn/lib/jquery.scrollTo.min.js' ?>"></script>
	<script src="<?php echo base_url() . './admn/lib/jquery.nicescroll.js' ?>" type="text/javascript"></script>
	<script src="<?php echo base_url() . './admn/ib/jquery.sparkline.js' ?>"></script>
	<!--common script for all pages-->
	<script src="<?php echo base_url() . './admn/lib/common-scripts.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . './admn/lib/gritter/js/jquery.gritter.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . './admn/ib/gritter-conf.js' ?>"></script>
	<!--script for this page-->
	<script src="<?php echo base_url() . './admn/lib/sparkline-chart.js' ?>"></script>
	<script src="<?php echo base_url() . './admn/lib/zabuto_calendar.js' ?>"></script>
	<script type="text/javascript">

	</script>
</body>

</html>