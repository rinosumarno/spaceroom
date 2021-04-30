<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i>Data Pembatalan</h3>
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
			<a href="<?php echo base_url('admin/data_booking'); ?>" class="btn btn-primary">Pergi ke data booking untuk membatalkan</a>
			<br/><br/>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="table-datatable">
				<thead>
					<tr>
						<th>No</th>
						<th>id</th>
						<th>Kode Booking</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($data_batal as $p) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $p->id; ?></td>
							<td><?php echo $p->id_booking; ?></td>
				</tr>
			<?php  } ?>
		</tbody>
	</table>
</div>
</section>
</section>