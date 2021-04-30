<!DOCTYPE html>
<html>
<body>

<section id="main-content">
      <section class="wrapper">
      	<h3><i class="fa fa-angle-right"></i>Data User</h3>


<div class="row mt">
          <div class="col-lg-12">
                   <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Jumlah User</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  <br>
                 
                    <div class="centered">
                      <h5><i class="fa fa-trophy"></i><?php echo $this->m_perpus->get_data('user')->num_rows(); ?></h5>
                    </div>
                  
                </div>
              </div>
            </div>
<!--a href="<?php echo base_url().'admin/tambah_user'; ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-plus"></span> User Baru</a-->
<br/>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable">
		<thead>
			<tr>
				<th style="text-align: center;">No</th>
				<th style="text-align: center;">Nama user</th>
				<th style="text-align: center;">Jenis Kelamin</th>
				<th style="text-align: center;">No. Telp</th>
				<th style="text-align: center;">Alamat</th>
				<th style="text-align: center;">Email</th>
				<th style="text-align: center;">Pilihan</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($user as $b){
			?>
			<tr>
				<td style="text-align: center;"><?php echo $no++; ?></td>
				<td style="text-align: center;"><?php echo $b->nama_user ?></td>
				<td style="text-align: center;"><?php echo $b->gender ?></td>
				<td style="text-align: center;"><?php echo $b->no_telp ?></td>
				<td style="text-align: center;"><?php echo $b->alamat ?></td>
				<td style="text-align: center;"><?php echo $b->email ?></td>
				<td nowrap="nowrap" align="center">
					<!--a class="btn btn-primary btn-sm" href="<?php echo base_url().'admin/edit_user/'.$b->id_user; ?>"><span class="glyphicon glyphicon-zoom-in"> </span></a-->
					 <a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/hapus_user/'.$b->id_user; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus user ini?');"><span class="glyphicon glyphicon-remove"></span></a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
</section>
</section>
</body>
</html>
