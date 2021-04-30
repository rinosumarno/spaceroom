<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Data Galery </h3>
		<div class="row mb">
			<!-- page start-->
			<div class="col-md-12">
				<div class="content-panel" style="padding-top: 5px;">
					<div class="adv-table">
						<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">

							<h4><a href="<?php echo base_url() . 'admin/tambah_galery'; ?>" class="btn btn-warning btn-md"><span class="fa fa-plus"></span> Add Galery</a> </h4>
					</div>
					<thead>
						<tr>
							<th>
								<center>No</center>
							</th>
							<th>
								<center>Default Gambar</center>
							</th>
							<th>
								<center><i class="fa fa-user"></i> Gambar </center>
							</th>
							<th>
								<center><i class="fa fa-cogs"></i> Opsi</center>
							</th>
						</tr>
					</thead>

					<tbody>

						<?php
						$no = 1;
						foreach ($galery as $b) {
						?>

							<tr>
								<td>
									<center><?php echo $no++; ?></center>
								</td>
								<td>
									<center><?php echo $b->aktif; ?></center>
								</td>
								<td>
									<center>
										<a href="<?php echo base_url() . '/assets/galery/datagalery/' . $b->gambar; ?>">
											<img src="<?php echo base_url() . '/assets/galery/datagalery/' . $b->gambar; ?>" width="120" alt="gambar tidak ada">
										</a>
									</center>
								</td>
								<td>
									<center>
										<?php if ($b->aktif != 'aktif') { ?>
											<form action="<?php echo base_url('admin/aktif_gambar/' . $b->id_galery) ?>" method="POST">
												<input type="hidden" name="id_ruangan" value="<?= $b->id_ruangan ?>">
												<input type="hidden" name="gambar" value="<?= $b->gambar ?>">
												<input type="hidden" name="aktif" value="aktif">
												<input type="submit" value="Aktifkan" class="btn btn-sm btn-success">
											</form>
											<br>
										<?php } else { ?>
											<form action="<?php echo base_url('admin/aktif_gambar/' . $b->id_galery) ?>" method="POST">
												<input type="hidden" name="id_ruangan" value="<?= $b->id_ruangan ?>">
												<input type="hidden" name="gambar" value="<?= $b->gambar ?>">
												<input type="hidden" name="aktif" value="-">
												<input type="submit" value="Nonaktifkan" class="btn btn-sm btn-success">
											</form>
											<br>
										<?php } ?>
										<a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/hapus_galery/' . $b->id_galery; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Foto ini?');">
											Delete
										</a>
								</td>
							</tr>

						<?php } ?>
					</tbody>
					</table>

				</div>
			</div>
		</div>
		</div>
	</section>
</section>

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