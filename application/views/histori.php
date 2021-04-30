<div class="page-header" style="padding-top: 50px;">
	
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>HISTORY BOOKING</h2>
				<h4> </h4>
			</div>
		</div>
	</section>
	<div style="margin-left: 120px;"  >
		<h3 style="margin-left: 30px;font-size: 30px;" >[ Data History Booking ] </h3>
	</div>
</div>

<?php
foreach($peminjaman as $p){
	?>
	

	<form action="<?php echo base_url().'admin/selesai_peminjaman/'.$p->id_booking ?>" method="post">
	<?php } ?>

	<div class="table-responsive table-histori" >
		<table class="table table-bordered table-striped table-hover" id="table-datatable">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Booking</th>
					<th>Nama Member</th>
					<th width="200">Email</th>
					<th>Jam Booking</th>
					<th>Tanggal</th>
					<th>No Telepon</th>
					<th>Alamat</th>
					<th>Status</th>	
					<th>Contact Me Now</th>		
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach($peminjaman as $p){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						
						<td>
							<div hidden="" class="form-group">
								<input hidden="" type="text" class="form-control"  name="id_user" value="<?php echo $p->id_user; ?>">
								<input hidden="" type="text" class="form-control"  name="id_booking" value="<?php echo $p->id_booking; ?>">
							</div>
							<?php echo $p->id_booking;?>
						</td>
						
						<td>
							<div hidden="" class="form-group">
								<input hidden="" type="text" class="form-control" name="nama" value="<?php echo $p->nama; ?>"></div><?php echo $p->nama; ?>
							</td>

							<td>
								<div hidden="" class="form-group">
									<input hidden="" type="text" class="form-control" name="email" value="<?php echo $p->email; ?>"></div><?php echo $p->email_pemesan; ?>
								</td>

								<td>
									<div hidden="" class="form-group">
										<input hidden="" type="text" class="form-control" name="jam" value="<?php echo $p->jam; ?>"></div><?php echo $p->jam; ?>
									</td>
									<td>
										<div hidden="" class="form-group">
											<input hidden="" type="text" class="form-control" name="tgl" value="<?php echo $p->tgl; ?>"></div><?php echo $p->tgl; ?></td>

											<td>
												<div hidden="" class="form-group">
													<input hidden="" type="text" class="form-control" name="notelp" value="<?php echo $p->notelp; ?>"></div><?php echo $p->notelp; ?></td>
													<td>
														<div hidden="" class="form-group">
															<input hidden="" type="text" class="form-control" name="almt" value="<?php echo $p->almt; ?>"></div><?php echo $p->almt; ?></td>

															<td>
																<div hidden="" class="form-group">
																	<input hidden="" type="text" class="form-control" name="harga" value="<?php echo $p->harga; ?>"></div><?php echo $p->status; ?></td>

																	<td>
																		<div hidden="" class="form-group">
																			<input hidden="" type="text" class="form-control" name="status" value="sudah bayar"></div><?php echo $p->status; ?></td>
																			<td>
																				<a href="https://api.whatsapp.com/send?phone=6281286920700">
																					<img src="<?php echo base_url('img/wa.png'); ?>" style="width: 50px; height: 50px; margin-left: 10px;" >
																				</td>

																			<?php } ?>

																			<?php ?>
																		</tbody>
																	</table>
																</div>

																<br>
																<br>
																<br>
																<br>
 <!-- Javascript
 	================================================== -->
 	<!-- Placed at the end of the document so the pages load faster -->
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
 	<script>window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')</script>
 	<script src="<?php echo base_url('perth/js/bootstrap.min.js')?>"></script>
 	<script src="<?php echo base_url('perth/js/wow.min.js')?>"></script>
 	<script src="<?php echo base_url('perth/js/main.js')?>"></script>

 	<script>
 		new WOW().init();
 	</script>



 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<meta name="keywords" content="footer, address, phone, icons" />

 	<title>Footer With Address And Phones</title>


 	<link rel="stylesheet" href="<?php echo base_url().'css/footer-distributed-with-address-and-phones.css'?>">





 	<footer style="margin-left: 0px;" class="footer-distributed">

 		<div class="footer-left">

 			<h3  style="margin-left: 100px;" >Space<span>Room</span></h3>

 			<p  style="margin-left: 100px;" class="footer-links">

 				<?php if($this->session->userdata('id_agt')) { ?>
 					<li style="margin-left: 135px; " ><?php echo anchor('admin/logout', 'LOGOUT');?></li>
 				<?php } else { ?>
 					<li style="margin-left: 140px;" ><?php echo anchor('welcome/login', 'LOGIN');?></li>
 				<?php } ?>
 				<br>


 				<a style="margin-left: 130px;" href="<?php echo base_url().'welcome/register_view'?>">REGISTER</a>		
 				<br>
 				<br>
 			</p>

 			<p  style="margin-left: 100px;" class="footer-company-name">SpaceRoom &copy; 2019</p>
 		</div>

 		<div class="footer-center">

 			<div>
 				<i class="fa fa-map-marker"></i>
 				<p><span>Jl.Margonda Raya No. 54 </span>Walikota, Depok</p>
 			</div>

 			<div>
 				<i class="fa fa-phone"></i>
 				<p>(021) 7875 317</p>
 			</div>

 			<div>
 				<i class="fa fa-envelope"></i>
 				<p><a href="mailto:support@company.com">Spaceroom@gmail.com</a></p>
 			</div>

 		</div>

 		<div class="footer-right">

 			<p class="footer-company-about">
 				<span>Mari Pro Photo Studio</span>

 			</p>

 			<div style="margin:35px;" class="footer-icons">

 				<a href="https://web.facebook.com/mariprophoto/?ref=page_internal"><i class="fa fa-facebook"></i></a>
 				<a href="#"><i class="fa fa-twitter"></i></a>


 			</div>

 		</div>

 	</footer>

 </body>

 </html>