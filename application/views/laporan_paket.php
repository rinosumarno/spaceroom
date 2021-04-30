<body>
	<!-- ===========================header section============================================== -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('<?php echo base_url(); ?>assets/galery/slide/room4.PNG');">

		<div class="title-event t-center m-b-52">
			<span class="tit2 p-l-15 p-r-15" style="font-size: 60px;">Detail Booking</span>
			<h3 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="color: #cf5d42; text-shadow: 6px 3px #ccc">
				Space Room
			</h3>
		</div>
	</section>
	<!-- ======================================================================================= -->
	<section class="section-ourmenu bg2-pattern p-t-30 about text-center">
		<div class="container">
			<div class="row">

				<h2>Detail Booking</h2>

				<h3 style="padding: 10px 16px; background: #f0ad4e; border-color: #f0ad4e; font-weight: bold; color: white; ">
					Jika Sudah Mengisi Form Booking Silahkan Tunggu email Konfirmasi dari Admin
				</h3>

				<div class="table-responsive">
					<center>
						<table class="table table-bordered table-striped table-hover" style="width:380px;">
							<?php
							foreach ($peminjaman as $a) {
							?>
								<tr>
									<th style="width: 200px;">
										Nama Member
									<th style="width: 20px;">:</th>
									</th>
									<th style="width:-300px;">
										<?php echo $a->nama_user; ?>
									</th>
								</tr>
								<?php
								foreach ($peminjaman as $a) {
								?>
									<tr>
										<th style="width: 200px;">
											Alamat Email
										<th style="width: 20px;">:
										</th>
										</th>
										<th style="width:-300px;">
											<?php echo $a->email; ?>
										</th>
									<?php } ?>
									</tr>
								<?php } ?>

								<?php
								$no = 1;
								foreach ($peminjaman as $b) {
								?>
									<tr>
										<th>Nomor Booking
										<th>:</th>
										</th>
										<th><?php echo $b->id_booking; ?></th>
									</tr>
								<?php } ?>

								<br />
								<br />
						</table>
					</center>

					<center>

						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover" style="width:900px;" id="table-datatable">
								<thead>
									<tr>
										<th style="text-align: center;">No</th>
										<th style="text-align: center;">No Telepon</th>
										<th style="text-align: center;">Jam Booking</th>
										<th style="text-align: center;">Tanggal Booking</th>
										<th style="text-align: center;">Alamat User</th>
										<th style="text-align: center;">Status</th>
										<th style="text-align: center;">Pilihan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($data_booking as $b) {
									?>
										<tr>
											<td style="text-align: center;"><?php echo $no++; ?></td>
											<td style="text-align: center;"><?php echo $b->notelp; ?></td>
											<td style="text-align: center;"><?php echo $b->jam; ?></td>
											<td style="text-align: center;"><?php echo $b->tgl; ?></td>
											<td style="text-align: center;"><?php echo $b->almt; ?></td>
											<?php if ($b->status == 'Ditolak') {
											?>
												<td class="text-center bg-danger"><?php echo $b->status; ?></td>
											<?php } else if ($b->status == 'Diterima') {
											?>
												<td class="text-center bg-success"><?php echo $b->status; ?></td>
											<?php } else {
											?>
												<td class="text-center bg-warning"><?php echo $b->status; ?></td>
											<?php } ?>
											<td>
												<!-- created by freeze -->
												<?php if ($b->status == 'Diterima' && date('d/m/Y') <= date('d/m/Y', strtotime($b->tgl))) { ?>
													<a class="btn btn-sm btn-warning center-block" href="<?php echo base_url('peminjaman/konfirmasi_pembatalan/' . $b->id_booking); ?>" onclick="return confirm('Tekan Oke Untuk Membatalkan Pembookingan')">
														<b>Batalkan Booking</b>
													</a>
												<?php } ?>
												<?php if ($b->status == 'Diterima') { ?>
													<a class="btn btn-sm btn-success center-block m-t-10" href="<?php echo base_url('galery/tambah_testimoni/' . $b->id_booking); ?>">
														<b>Upload foto untuk testimonial</b>
													</a>
												<?php }  ?>
											</td>
										</tr>
								</tbody>
							<?php } ?>
							</table>
						</div>
					</center>
				</div>

				<a style="width: 100px; margin-bottom: 10px;" class="btn btn-success btn-md" href="<?php echo base_url() . 'member' ?>">
					<span class="glyphicon glyphicon-home"></span>
					Home</a>
			</div>
		</div>
	</section>

	<title>Footer With Address And Phones</title>

	<link rel="stylesheet" href="<?php echo base_url() . 'css/footer-distributed-with-address-and-phones.css' ?>">

	<footer class="dark-div footer-distributed">

		<div class="footer-left" class="col-md-12">
			Dinas Komunikasi dan Informatika | Pemerintah Kota Depok<br />Gedung Dibaleka II Komplek Balaikota Depok Lantai 7,<br /> Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402276 dan (021) 7764410,<br /> Email : diskominfo@depok.go.id
		</div>

	</footer>

</body>

<script src="<?php echo base_url() . './styleob/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
<script src="<?php echo base_url() . './styleob/vendor/bootstrap/js/popper.js' ?>"></script>
<script src="<?php echo base_url() . './styleob/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url() . './styleob/vendor/select2/select2.min.js' ?>"></script>
<script src="<?php echo base_url() . './styleob/js/main.js' ?>"></script>
</script>

<!-- Javascript
    	================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
	window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')
</script>
<script src="<?php echo base_url() . './perth/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url() . './perth/js/wow.min.js' ?>"></script>
<script src="<?php echo base_url() . './perth/js/main.js' ?>"></script>