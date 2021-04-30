<div class="page-header">
	<h3>Data Konfirmasi</h3>
</div>
<!--a href="<?php echo base_url().'admin/tambah_user'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> User Baru</a-->
<br/><br/>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th style="width: 60px;"><center>No</center></th>
				<th >Id User</th>
				<th>Nama user</th>
				<th><center>Foto</center></th>
				<th style="width: 40px;">Pilihan</th>
				
			
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($konfirmasi as $k){
			?>
			<tr>
				<td><center><?php echo $no++; ?></center></td>
				<td><?php echo $k->id_booking ?></td>
				<td><?php echo $k->nama ?></td>
				<td><center><a href="<?php echo base_url().'/assets/galery/'.$k->gambar; ?>"><img src="<?php echo base_url().'/assets/galery/'.$k->gambar; ?>" width="60" height="80" alt="gambar tidak ada"></a></center></td>

				<td nowrap="nowrap" align="center">
				
					<a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/hapus_datakonfirmasi/'.$k->id_booking; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>
					
														
				
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>