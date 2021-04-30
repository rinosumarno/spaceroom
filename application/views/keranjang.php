<div style="padding: 25px;">
	<div class="page-header"><br>
		<h3 style="position: relative; left: 25%">Data Paket Foto</h3>
	</div>
	<div style="position: relative; left: 25%">
		<table>
			<?php
			foreach ($user as $a) {
				?>
				<tr><th>Nama User</th><th>:</th><th><?php echo $a->nama_user;
				?></th></tr>
				<tr><th>Alamat</th><th>:</th><th><?php echo $a->alamat; ?></th></tr>
				<?php
				$no = 1;
				foreach($peminjaman as $b ){
					?>
					<tr><th>Kode Booking</th><th>:</th><th><?php echo $b->id_booking; ?></th></tr>
				<?php } ?>
			<?php } ?>
			<tr>
				<td colspan="3">
					<br/><br/>
					<div class="page-header">
						<h3>Data paket</h3>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover" id="table-datatable" >
							<thead>
								<tr>
									<th>No</th>
									<th>Gambar</th>
									<th>Nama Paket</th>
									<th>Deskripsi</th>
									<th>Harga</th>
									<th>Nama</th>
									<th>Jam</th>
									<th>Tanggal</th>
									<th>Alamat</th>

								</tr>
							</thead>
							<tbody>
								<?php
								$no = 1;
								foreach($peminjaman as $b){
									?>
									<tr>
										<td><?php echo $no++; ?></td>
										<td><img src="<?php echo base_url();?>assets/upload/<?php echo $b->gambar; ?>" width="70"></td>
										<td style="max-width: 200px"><?php echo $b->nama_paket; ?></td>
										<td><?php echo $b->deskripsi; ?></td>
										<td><?php echo $b->harga; ?></td>
										<td><?php echo $b->nama; ?></td>
										<td><?php echo $b->jam; ?></td>
										<td><?php echo $b->tgl; ?></td>
										<td><?php echo $b->almt; ?></td>

									</form>


								</tr>
							</tbody>
						</table>
						
					<?php } ?>
				</div>
			</td>
		</tr>
		<tr><td colspan="3"><hr></td></tr>
		<tr>
			<td align="left">
				<!--<a class="btn btn-sm btn-primary" href="<?php echo base_url().'member'; ?>"><span class="glyphicon glyphicon-delete"></span>Lanjutkan Booking paket</a>-->
			</td>
			<td>
				&nbsp;
			</td>
			<td align="right">
				<a class="btn btn-sm btn-success" href="<?php echo base_url().'peminjaman/cetak_laporan_paket/'.$this->session->userdata('id_agt');?>"><span class="glyphicon glyphicon-delete"></span> Cetak</a>
			</td>
			<!--td align="center"><a href="<?php echo base_url().'peminjaman/cetak_laporan_paket'; ?>"><i class="glyphicon glyphicon-lock"></i>Laporan Data paket</a></td-->
		</tr>
	</table>
</div>
</div>
