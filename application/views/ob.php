	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Online Booking</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() . './styleob/css/main.css' ?>">
	</head>

	<body>
		<!-- ====================================================
			header section -->
		<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('<?php echo base_url(); ?>assets/galery/slide/room4.png');">

			<div class="title-event t-center m-b-52">
				<span class="tit2 p-l-15 p-r-15" style="font-size: 60px;">Form Booking</span>
				<h4 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="font-size: 50px; color: #cf5d42; text-shadow: 6px 3px #ccc">
					Space Room
				</h4>
			</div>
		</section>

		<form action="<?php echo base_url() . 'member/booking_act' ?>" enctype="multipart/form-data" method="post">
			<section class="section-reservation bg1-pattern p-t-30">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 p-b-30">

							<center>
								<span class="tit2 t-center" style="text-align: center;">
									Schedule Booking
								</span>
							</center>
							<div class="panel-body">
								<center>
									<div class="table-responsive">
										<table class="table table-bordered table-striped table-hover" style="width:100px;">
											<thead>
												<tr>
													<th style="width:10px; text-align: center;">Kode Booking</th>
													<th style="width:10px; text-align: center;">Tanggal Boking</th>
													<th style="width:10px; text-align: center;">Nama Pemboking</th>
													<th style="text-align: center;">Jam booking</th>
													<th style="text-align: center;">Status Booking</th>

												</tr>
											</thead>
											<tbody>
												<?php
												foreach ($peminjaman as $p) {
												?>
													<tr>
														<td><?php echo $p->id_booking; ?></td>
														<td><?php echo date('d/m/Y', strtotime($p->tgl)); ?></td>
														<td><?php echo $p->nama_user; ?></td>
														<td><?php echo $p->jam; ?></td>
														<td><?php echo $p->status ?> </td>
													</tr>
												<?php } ?>
											</tbody>
										</table>
									</div>
								</center>

								<div class="wrap-form-reservation col-lg-12 m-auto">
									<div class="m-auto">
										<div class="m-auto">
											<form class="contact100-form validate-form">
												<center>
													<span class="contact100-form-title"></span>
												</center>
												<div class="page-header">

													<h3 class="tit3 t-center m-b-35 m-t-2">DATA BOOKING</h3>
													<center>
														<span class="tit2 t-center">
															Ketentuan :Harap Sesuaikan Jam Booking Agar Tidak Bentrok
														</span>
													</center>

												</div>

												<div class="form-group">
													<span class="txt9">Jam Booking <br>
														<small class="text-danger"> Ketentuan :Jam Booking ditunjukan untuk perjanjian waktu datang ke ruangan, dan kalau lebih dari jam yang sudah ditentukan maka bookingan akan dibatalkan</small> </span>
													<?php foreach ($ruangan as $room) { ?>
														<input class="form-control" type="hidden" name="id_ruangan" value="<?= $room->id_ruangan ?>" required readonly>
													<?php } ?>
													<input class="form-control" type="time" name="jam" placeholder="11:10 WIB" required>
												</div>

												<div class="form-group">
													<span class="label-input100">Upload KTP</span>
													<input class="form-control" type="file" name="foto">
													<p>* Harap Memasukan file dengan format
														<span style="color: red;">PNG/JPG/Jpeg</span>
													</p>
												</div>


												<div class="form-group">
													<span class="label-input100">Email Pemesan
														<small class="text-danger">
															(Harap masukkan email yang masih aktif untuk mengirim konfirmasi email)</small>
													</span>
													<input class="form-control" type="email" name="email_pemesan" placeholder="Email" required=>
												</div>

												<div class="form-group">
													<span class="label-input100">Tanggal Booking</span>
													<input class="form-control" type="date" name="tgl" required>
												</div>

												<!-- 													<div class="form-group">
														<span class="label-input100">Tanggal Selesai</span>
														<input class="form-control" 
														type="date" 
														name="tgl_selesai" 
														placeholder="" 
														required>
													</div>
												</div> -->

												<div class="form-group">
													<span class="label-input100">No Telp</span>
													<input class="form-control" type="text" name="notelp" placeholder="087873050008" required="-">
												</div>

												<div class="form-group">
													<span class="label-input100">Alamat Lengkap</span>
													<textarea class="form-control border" name="almt" placeholder="Masukan Alamat Lengkap" required>
												</textarea>
												</div>
												<div class="form-group">
													<button class="btn btn-lg btn-primary center-block text-uppercase">
														Submit
													</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</form>

		<script src="<?php echo base_url() . './styleob/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
		<script src="<?php echo base_url() . './styleob/vendor/bootstrap/js/popper.js' ?>"></script>
		<script src="<?php echo base_url() . './styleob/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
		<script src="<?php echo base_url() . './styleob/vendor/select2/select2.min.js' ?>"></script>
		<script src="<?php echo base_url() . './styleob/js/main.js' ?>"></script>

		<!-- Javascript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script>
			window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')
		</script>
		<script src="perth/js/bootstrap.min.js"></script>
		<script src="perth/js/wow.min.js"></script>
		<script src="perth/js/main.js"></script>

		<script>
			new WOW().init();
		</script>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="footer, address, phone, icons" />

		<title>Footer With Address And Phones</title>


		<link rel="stylesheet" href="<?php echo base_url() . 'css/footer-distributed-with-address-and-phones.css' ?>">

		<footer class="dark-div footer-distributed">

			<div class="footer-left" class="col-md-12">
				Dinas Komunikasi dan Informatika | Pemerintah Kota Depok<br />Gedung Dibaleka II Komplek Balaikota Depok Lantai 7,<br /> Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402276 dan (021) 7764410,<br /> Email : diskominfo@depok.go.id </div>

		</footer>


		<script src="js/jquery-2.1.1.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/gmaps.js"></script>
		<script src="js/smoothscroll.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>

	</body>

	</html>