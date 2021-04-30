<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i>Data Slide Show Home</h3>

		<a href="<?php echo base_url() . 'admin/tambah_slide'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Add Slide </a>
		<br /><br />
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="table-datatable">
				<thead>
					<tr>
						<th>No</th>
						<th>Judul Slide Home</th>
						<th>Gambar</th>

						<th>Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($slide as $b) {
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $b->judul_slide ?></td>
							<td><img src="<?php echo base_url() . '/assets/galery/slide/' . $b->gambar; ?>" width="120" alt="gambar tidak ada"></td>


							<td nowrap="nowrap" align="center">
								<a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'admin/edit_slide/' . $b->id_slide; ?>"><span class="glyphicon glyphicon-zoom-in"> </span></a>
								<a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/hapus_slide/' . $b->id_slide; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?');"><span class="glyphicon glyphicon-remove"></span></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</section>
</section>