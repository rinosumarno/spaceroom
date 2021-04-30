<div class="page-header">
	<h3>Proses Cancel Status</h3>
</div>

<br/><br/>
<?php
foreach($peminjaman as $p){
	?>
	<form action="<?php echo base_url().'admin/batalkan/'.$p->id_booking ?>" method="post">
		<?php } ?>
		<div class="table-responsive">
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
						<th>Pilihan</th>
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
									<input hidden="" type="text" class="form-control"  name="id_paket" value="<?php echo $p->id_paket; ?>">
									<input hidden="" type="text" class="form-control"  name="id_booking" value="<?php echo $p->id_booking; ?>"></div><?php echo $p->id_booking;?></td>

									<td>
										<div hidden="" class="form-group">
											<input hidden="" type="text" class="form-control" name="nama" value="<?php echo $p->nama; ?>"></div><?php echo $p->nama; ?></td>


											<td>
												<div hidden="" class="form-group">
													<input hidden="" type="text" class="form-control" name="email" value="<?php echo $p->email; ?>"></div><?php echo $p->email; ?></td>


													<td>
														<div hidden="" class="form-group">
															<input hidden="" type="text" class="form-control" name="jam" value="<?php echo $p->jam; ?>"></div><?php echo $p->jam; ?></td>


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
																							<input hidden="" type="text" class="form-control" name="status_bayar" value="sudah bayar"></div><?php echo $p->status_bayar; ?></td>

																						</td>
																						<td>

																							
																							<div  class="form-group">
																								<input type="submit" value="Batalkan" class="btn btn-sm btn-danger">
																							</div>
																							<?php } ?>

																							
																							
																						</td>
																					</tr>
																					<?php ?>
																				</tbody>
																			</table>
																		</div>
