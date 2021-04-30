<!DOCTYPE html>
<html lang="en">
<head>
	<title>Space Room</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=sans-serif:400,700" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" style="width: 50px;" href="<?php echo base_url().'img/pemkot.png' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). 'css/font-awesome.min.css' ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/css/util.css' ?>">
	
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/fullcalendar/fullcalendar.css'; ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/fonts/themify/themify-icons.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/vendor/animate/animate.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/vendor/css-hamburgers/hamburgers.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/vendor/animsition/css/animsition.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/vendor/select2/select2.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/vendor/daterangepicker/daterangepicker.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/vendor/slick/slick.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/vendor/lightbox2/css/lightbox.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./pato/css/main.css' ?>">
	<!--===============================================================================================-->

</head>
<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="wrap-menu-header gradient1 trans-0-4">
			<div class="container h-full">
				<div class="wrap_header trans-0-3">
					<!-- Logo -->
					
					<div class="logo">
						<a href="<?php echo base_url().'member'?>">
							<img src="<?php echo base_url().'img/dpk.png' ?>" alt="IMG-LOGO" style="width: 80%;" data-logofixed="<?php echo base_url().'img/dpk.png' ?>"></a>
					</div>

					<!-- Menu -->
					<div class="wrap_menu p-l-45 p-l-0-xl">
						<nav class="menu">
							<?php if($this->session->userdata('nama_agt')) { ?>
								<ul class="main_menu">

									<li>
										<a href="<?php echo base_url().'member'?>">Home</a>
									</li>

									<li>
										<a href="<?php echo base_url().'galery'?>">Fasilitas & Booking</a>
									</li>

									<li>
										<a href="<?php echo base_url().'galery/galeri'?>">Gallery </a>
									</li>

									<li>
										<a href="<?php echo base_url().'peminjaman/cetak_laporan_paket'?>">Detail Booking</a>
									</li>

									<li>
										<a class="dropdown" href="#team" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false">Hai  <b> <?=$this->session->userdata('nama_agt')?> <span class="caret"></span>	
										</b></a>
										<ul class="dropdown-menu">
											<center><li><h4><a style="color: black;" href="<?php echo base_url().'member/gantipass'?>"><i class="glyphicon glyphicon-lock" style="color: black;" ></i>    Ganti Password</a></h4></li></center>
										</ul>
									</li>

									<li>
										<a class="btn4 flex-c-m size13 txt11 trans-0-4 m-l-r-auto" style="width: 100px; height: 30px;" href="<?php echo base_url().'admin/logout'?>">Logout</a>
									</li>      
								</ul>

							<?php } else{ ?>

								<ul class="main_menu">

									<li>
										<a href="<?php echo base_url().'member'?>">Home</a>
									</li>

									<li>
										<a href="<?php echo base_url().'galery'?>">Fasilitas & Booking</a>
									</li>

									<li>
										<a href="<?php echo base_url().'galery/galeri'?>">Gallery </a>
									</li>

									<li>
										<div class="social flex-w flex-l-m p-r-20">
											<center><a href="<?php echo base_url().'welcome/login'?>" class="btn4 flex-c-m size13 txt11 trans-0-4 m-l-r-auto" style="width: 100px; height: 30px;"><b>LOGIN</b></a></center>


										</div>
									</li>

								</ul>
							<?php } ?>

						</nav>
					</div>

				</div>
			</div>
		</div>
	</header>


	<!--aside class="sidebar trans-0-4">
        <!-- Button Hide sidebar -->
        <!--button class="btn-hide-sidebar ti-close color0-hov trans-0-4"></button>

        <!-- - -->
        
        <!--ul class="menu-sidebar p-t-95 p-b-70">
            <li class="t-center m-b-13">
                <a href="<?php echo base_url().'member'?>" class="txt19">Home</a>
            </li>

            <li class="t-center m-b-13">
                <a href="<?php echo base_url().'#'?>" class="txt19">Info & Promo</a>
            </li>

            <li class="t-center m-b-13">
                <a href="#" class="txt19">Facilities</a>
            </li>

            <li class="t-center m-b-33">
                <a href="#" class="txt19">Contact</a>
            </li>

            <li class="t-center m-b-33">
                <a href="#" class="txt19">About</a>
            </li>

            <li class="t-center">
                <!-- Button3 -->
                <!--a href="<?php echo base_url().'member/booking'?>" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                    Reservation
                </a>
            </li>
        </ul>

        
        </div>
    </aside!-->


	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/animsition/js/animsition.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/bootstrap/js/popper.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/select2/select2.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/daterangepicker/moment.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/daterangepicker/daterangepicker.js' ?>"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/slick/slick.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'./pato/js/slick-custom.js' ?>"></script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/parallax100/parallax100.js' ?>"></script>
	<script type="text/javascript">
		$('.parallax100').parallax100();
	</script>
	<!--===============================================================================================-->
	<script type="text/javascript" src="<?php echo base_url().'./pato/vendor/countdowntime/countdowntime.js' ?>"></script>
	<!--===============================================================================================-->

	<!--===============================================================================================-->
	<script src="<?php echo base_url().'./pato/js/main.js' ?>"></script>

	</html>