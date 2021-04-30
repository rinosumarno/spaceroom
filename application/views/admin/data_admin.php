<!DOCTYPE html>
<html>
<body>

 <section id="main-content">
      <section class="wrapper">
      	<h3><i class="fa fa-angle-right"></i> Data Admin</h3>


      	<div class="row mt">
          <div class="col-lg-12">
                   <div class="darkblue-panel pn">
                  <div class="darkblue-header">
                    <h5>Jumlah Admin</h5>
                  </div>
                  <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                  <br>
                 
                    <div class="centered">
                      <h5><i class="fa fa-trophy"></i><?php echo $this->m_perpus->get_data('admin')->num_rows(); ?></h5>
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
				<th style="text-align: center;">Nama admin</th>
				<th style="text-align: center;">Username</th>
				<th style="text-align: center;">Tambah Admin</th>
				<th style="text-align: center;">Hapus Admin</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 1;
				foreach($admin as $a){
			?>
			<tr>
				<td style="text-align: center;"><?php echo $no++; ?></td>
				<td style="text-align: center;"><?php echo $a->nama_admin ?></td>
				<td style="text-align: center;"><?php echo $a->username ?></td>
				<td style="text-align: center;"><a href="<?php echo base_url().'admin/tambah_admin'; ?>" class="btn btn-warning btn-md"><span class="fa fa-user"> Admin</span></a></td>
				<td nowrap="nowrap" align="center">
					<!--a class="btn btn-primary btn-sm" href="<?php echo base_url().'admin/edit_user/'.$b->id_user; ?>"><span class="glyphicon glyphicon-zoom-in"> </span></a-->
					 <a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/hapus_admin/'.$a->id_admin; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus Admin ini?');"><span class="glyphicon glyphicon-remove"></span></a>
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