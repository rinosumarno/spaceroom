<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Favicons -->
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url() . './admn/lib/bootstrap/css/bootstrap.min.css' ?>" rel="stylesheet">
	<!--external css-->
	<link href="<?php echo base_url() . './admn/lib/font-awesome/css/font-awesome.css' ?>" rel="stylesheet" />
	<link href="<?php echo base_url() . './admn/lib/font-awesome/css/font-awesome.css" rel="stylesheet' ?>" />
	<link href="<?php echo base_url() . './admn/lib/fullcalendar/bootstrap-fullcalendar.css' ?>" rel="stylesheet" />
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url() . './admn/css/style.css' ?>" rel="stylesheet">
	<link href="<?php echo base_url() . './admn/css/style-responsive.css' ?>" rel="stylesheet">

	<section id="main-content">
		<section class="wrapper">

			<h3><i class="fa fa-angle-right"></i>Dashboard</h3>
			<div class="row mt">
				<div class="col-lg-12">
					<div class="darkblue-panel pn">
						<div class="darkblue-header">
							<h5>Jumlah Booking</h5>
						</div>
						<h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
						<br>

						<div class="centered">
							<h5>
								<i class="fa fa-trophy"></i>
								<?php echo $this->m_perpus->get_data('transaksi')->num_rows(); ?>
							</h5>
						</div>

					</div>
				</div>
			</div>

			<br>
			<center>
				<div class="col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title" 
							style="font-size: 18px; font-weight: bold;">
							<i class="glyphicon glyphicon-user o"></i> admin
						</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<?php foreach ($admin as $a) { ?>
								<a href="#" class="list-group-item">
									<span class="badge"><?php echo $a->nama_admin; ?></span>
									<i class="glyphicon glyphiconuser"></i> <?php echo $a->nama_admin; ?>
								</a>
							<?php } ?>
						</div>
						<div class="text-right">
							<a href="<?php echo base_url() . 'admin/admin' ?>">
								Lihat Semua Admin <i class="glyphicon glyphicon-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" 
						style="font-size: 18px; font-weight: bold;">
						<i class="glyphicon glyphicon-user o"></i> User Terbaru</h3>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<?php foreach ($user as $a) { ?>
								<a href="#" class="list-group-item">
									<span class="badge"><?php echo $a->username; ?></span>
									<i class="glyphicon glyphiconuser"></i> <?php echo $a->nama_user; ?>
								</a>
							<?php } ?>
						</div>
						<div class="text-right">
							<a href="<?php echo base_url() . 'admin/user' ?>">
								Lihat Semua User <i class="glyphicon glyphicon-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" 
						style="font-size: 18px; font-weight: bold;">
						<i class="glyphicon glyphicon-sort"></i> Bookingan Terakhir</h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-bordered tablehover table-striped">
								<thead>
									<tr>
										<th>Kode Booking</th>
										<th>Nama Member</th>
										<th>Email</th>
										<th>Jam Booking</th>
										<th>Tanggal</th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach ($peminjaman as $p) {
										?>
										<tr>
											<td><?php echo $p->id_booking; ?></td>
											<td><?php echo $p->nama; ?></td>
											<td><?php echo $p->email_pemesan; ?></td>
											<td><?php echo $p->jam; ?></td>
											<td><?php echo date('d/m/Y', strtotime($p->tgl)); ?></td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="text-right">
							<a href="<?php echo base_url() . 'admin/data_booking' ?>">Lihat Semua Bookingan <i class="glyphicon glyphicon-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</center>
		</div>
	</section>
</section>
</section>

<script src="<?php echo base_url() . './admn/lib/jquery-ui-1.9.2.custom.min.js' ?>"></script>
<script src="<?php echo base_url() . './admn/lib/fullcalendar/fullcalendar.min.js' ?>"></script>
<script src="<?php echo base_url() . './admn/lib/bootstrap/js/bootstrap.min.js' ?>"></script>
<script class="include" type="text/javascript" src="<?php echo base_url() . './admn/lib/jquery.dcjqaccordion.2.7.js' ?>"></script>
<script src="<?php echo base_url() . './admn/lib/jquery.scrollTo.min.js' ?>"></script>
<script src="<?php echo base_url() . './admn/lib/jquery.nicescroll.js' ?>" type="text/javascript"></script>
<!--common script for all pages-->
<script src="<?php echo base_url() . './admn/lib/common-scripts.js' ?>"></script>
<!--script for this page-->
<script src="<?php echo base_url() . './admn/lib/calendar-conf-events.js' ?>"></script>

</body>

</html>