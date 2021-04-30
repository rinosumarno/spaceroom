<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i>Data Booking</h3>
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
							<i class="fa fa-trophy"></i><?php echo $this->m_perpus->get_data('transaksi')->num_rows(); ?>
						</h5>
					</div>

				</div>
			</div>
		</div>
		<br>

		<div class="table-responsive">
			<table class="text-center table table-bordered table-striped table-hover" id="table-datatable">
				<thead>
					<tr>
						<th>No</th>
						<th>Kode Booking</th>
						<th>Nama User</th>
						<th>Identitas</th>
						<th width="200">Email</th>
						<th>Jam Booking</th>
						<th>Tanggal Booking</th>
						<!-- <th>Tanggal Selesai</th> -->
						<th>No Telepon</th>
						<th>Alamat</th>
						<th>Status Booking</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($peminjaman as $p) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $p->id_booking; ?></td>
							<td><?php echo $p->nama_user; ?></td>
							<td>
								<a href="<?php echo base_url() . '/assets/galery/' . $p->gambar; ?>">
									<img src="<?php echo base_url() . '/assets/galery/' . $p->gambar; ?>" style="width: 100px; height: auto;">
								</a>
							</td>
							<td><?php echo $p->email_pemesan; ?></td>
							<td><?php echo $p->jam; ?></td>
							<td><?php echo $p->tgl; ?></td>
							<!-- <td><?php echo $p->tgl_selesai; ?></td> -->
							<td><?php echo $p->notelp; ?></td>
							<td><?php echo $p->almt; ?></td>
							<?php if ($p->status == 'Pending') {
								echo '<td class="bg-primary">' . $p->status . '</td>';
							} elseif ($p->status == 'Ditolak') {
								echo '<td class="bg-danger">' . $p->status . '</td>';
							} elseif ($p->status == 'Diterima') {
								echo '<td class="bg-success">' . $p->status . '</td>';
							} else {
								echo '<td class="bg-warning">' . $p->status . '</td>';
							}
							?>
							<td>
								<div class="form-group">
									<?php if ($p->status == 'Pending') {
									?>
										<form action="<?php echo base_url() . 'admin/selesai_peminjaman/' . $p->id_booking ?>" method="post">
											<div class="form-group">
												<input type="hidden" name="id_booking" value="<?php echo $p->id_booking  ?>">
												<input type="hidden" name="id_user" value="<?php echo $p->id_user  ?>">
												<input type="hidden" name="title" value="<?php echo $p->nama_user  ?>">
												<input type="hidden" name="start_date" value="<?php echo $p->tgl  ?>">
												<!-- 												<input type="hidden"  name="end_date" value="<?php echo $p->tgl_selesai  ?>"> -->
												<input type="hidden" name="description" value="Sudah di booking jam <?php echo $p->jam ?>">
												<input type="hidden" name="color" value="#008000">
												<input type="submit" value="Terima Booking" class="btn btn-sm btn-success">
											</div>
										</form>
										<!-- BATAS TOLAK DAN DITERIMA -->
										<form action="<?php echo base_url() . 'admin/tolak_booking/' . $p->id_booking ?>" method="post">
											<div class="form-group">
												<input type="hidden" name="id_booking" value="<?php echo $p->id_booking  ?>">
												<input type="hidden" name="id_user" value="<?php echo $p->id_user  ?>">
												<input type="hidden" name="id_ruangan" value="<?php echo $p->id_ruangan  ?>">
												<input type="hidden" name="nama" value="<?php echo $p->nama  ?>">
												<input type="hidden" name="email_pemesan" value="<?php echo $p->email_pemesan  ?>">
												<input type="hidden" name="jam" value="<?php echo $p->jam ?>">
												<input type="hidden" name="tgl" value="<?php echo $p->tgl ?>">
												<!-- 												<input type="hidden" name="tgl_selesai" value="<?php echo $p->tgl_selesai ?>"> -->
												<input type="hidden" name="notelp" value="<?php echo $p->notelp ?>">
												<input type="hidden" name="almt" value="<?php echo $p->almt ?>">
												<input type="hidden" name="gambar" value="<?php echo $p->gambar ?>">
												<input type="submit" value="Tolak Boking" class="btn btn-sm btn-danger">
											</div>
										</form>
									<?php } elseif ($p->status == 'Diterima') { ?>
										<form action="<?php echo base_url() . 'admin/batalkan_booking' ?>" method="post">
											<div class="form-group">
												<input type="hidden" name="id_booking" value="<?php echo $p->id_booking  ?>">
												<input type="hidden" name="id_user" value="<?php echo $p->id_user  ?>">
												<input type="hidden" name="id_ruangan" value="<?php echo $p->id_ruangan  ?>">
												<input type="hidden" name="nama" value="<?php echo $p->nama  ?>">
												<input type="hidden" name="email_pemesan" value="<?php echo $p->email_pemesan  ?>">
												<input type="hidden" name="jam" value="<?php echo $p->jam ?>">
												<input type="hidden" name="tgl" value="<?php echo $p->tgl ?>">
												<!-- <input type="hidden" name="tgl_selesai" value="<?php echo $p->tgl_selesai ?>"> -->
												<input type="hidden" name="notelp" value="<?php echo $p->notelp ?>">
												<input type="hidden" name="almt" value="<?php echo $p->almt ?>">
												<input type="hidden" name="gambar" value="<?php echo $p->gambar ?>">
											</div>
											<input type="submit" value="Batalkan Boking" class="btn btn-sm btn-warning">
										</form>
									<?php } else {
										echo '<h3 class="glyphicon glyphicon-remove"></h3>';
									} ?>
								</div>
							</td>
						</tr>
					<?php  } ?>
				</tbody>
			</table>
		</div>
	</section>
</section>