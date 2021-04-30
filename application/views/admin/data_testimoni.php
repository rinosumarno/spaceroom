<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i> Data Galery </h3>
		<div class="row mb">
			<!-- page start-->
			<div class="col-md-12">
				<div class="content-panel">
					<div class="adv-table">
						<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info" >
							<div class="showback">

								<h4><a href="<?php echo base_url().'admin/tambah_galery'; ?>" class="btn btn-warning btn-md"><span class="fa fa-plus"></span> Add Galery</a> </h4>
							</div>
							<thead>
								<tr>
									<th ><center>No</center></th>
									<th ><center><i class="fa fa-user" ></i> Gambar </center></th>
									<th ><center><i class="fa fa-cogs"></i> Opsi</center></th>
								</tr>
							</thead>

							<tbody>

								<?php
								$no = 1;
								foreach($testimoni as $b){
									?>

									<tr>
										<td><center><?php echo $no++; ?></center></td>
										<td>
											<center> 
												<a href="<?php echo base_url().'/assets/upload/dokumentasi/'.$b->gambar; ?>">
													<img src="<?php echo base_url().'/assets/upload/dokumentasi/'.$b->gambar; ?>" 
													width="120" 
													alt="gambar tidak ada" >
												</a>
											</center>
										</td>
										<td>
											<center>
												<a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/delete_testimoni/'.$b->id; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Foto ini?');"><span class="glyphicon glyphicon-remove"></span></a>
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

	<script src="<?php echo base_url().'./admn/lib/bootstrap/js/bootstrap.min.js' ?>"></script>
	<script class="include" type="text/javascript" src="<?php echo base_url().'./admn/lib/jquery.dcjqaccordion.2.7.js' ?>"></script>
	<script src="<?php echo base_url().'./admn/lib/jquery.scrollTo.min.js' ?>"></script>
	<script src="<?php echo base_url().'./admn/lib/jquery.nicescroll.js' ?>" type="text/javascript"></script>
	<script src="<?php echo base_url().'./admn/ib/jquery.sparkline.js' ?>"></script>
	<!--common script for all pages-->
	<script src="<?php echo base_url().'./admn/lib/common-scripts.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'./admn/lib/gritter/js/jquery.gritter.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'./admn/ib/gritter-conf.js' ?>"></script>
	<!--script for this page-->
	<script src="<?php echo base_url().'./admn/lib/sparkline-chart.js' ?>"></script>
	<script src="<?php echo base_url().'./admn/lib/zabuto_calendar.js' ?>"></script>
	<script type="text/javascript">

	</script>