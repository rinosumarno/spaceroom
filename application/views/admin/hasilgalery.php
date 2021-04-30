 <div class="page-header">
	<h3>Data Galery Foto</h3>
</div>
<a href="<?php echo base_url().'admin/tambah_galery'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> Galery Foto Baru</a>
<br/><br/>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th style="text-align: center; width: 50px; " >No</th>
				<th style="text-align: center; " >Gambar</th>
				<th style="text-align: center; " >Nama Foto</th>
				<th style="text-align: center; width: 300px;" >Nama Kategori Paket</th>					
				<th style="width: 40px;">Pilihan</th>
			</tr>	
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($paket as $b){
			?>
			<tr>
				<td><center><?php echo $no++; ?></center></td>
				<td><center><img src="<?php echo base_url().'/assets/galery/'.$b->gambar; ?>" width="60" height="80" alt="gambar tidak ada"></center></td>
				<td><center><?php echo $b->nama_foto ?></center></td>
				<td><center><?php echo $b->nama_kategori?></center></td>

			
				
				
				
				<td nowrap="nowrap">
					
					<center><a class="btn btn-warning btn-xs" href="<?php echo base_url().'admin/hapus_galer/'.$b->id_galery; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus foto ini?');"><span class="glyphicon glyphicon-remove"></span></a></center>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>

