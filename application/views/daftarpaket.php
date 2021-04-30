<!DOCTYPE html>
<html>
<head>
	<title> Perpustakaan </title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
</head>
<body>
	<div>
		<?php $this->load->view('toplayout') ?>
	</div>
	<?php if($this->session->flashdata())
	{

		echo "<div class='alert ;aler-danger alert-primary'>";
		echo $this->session->flashdata('alert');
		echo "</div>";
	} ?>

	<div style="padding:25px">
		<div class="x_panel">
			<div class="x_title">
				<div class="page_header">
					<h3><?=$header?></h3>
				</div>
				<div class="clearfix"></div>
			</div>

			<div class="x_content">
				<!---tampilkan semua produk --->
				<div class="row">
					<!---looping products --->
					<?php foreach ($paket as $paket) {
						?>
						<div class="col-sm-3 col-md-3">
							<div class="thumbnail" style="height: 370px;">
								<img src="<?php echo base_url();?>assets/upload/<?=$paket->gambar;?>" style="max-width: 100%; max-height: 100%; height: 150px; width: 120px">

								<div class="caption">
									<h4 style="min-height: 40px;"><?=$paket->pengarang?></h4>
									<p><?=substr($paket->judul_paket,0,30).'..'?></p>
									<p><?=$paket->penerbit?></p>
									<p><?=substr($paket->thn_terbit,0,4)?></p>
									<p>
										<?=anchor('peminjaman/tambah_pinjam/' . $paket->id_paket, 'booking',['class' =>'btn btn-primary',
											'role' => 'button'

										])?>
										<?=anchor('paket/katalog_detail/' . $paket->id_paket,'Detail' ,['class' => 'btn btn-warning glyphicon glyphicon-zoom-in','role' => 'button'
									])?>
									
									
								</p>
							</div>
						</div>
					</div>
				<?php } ?>
				<!-- EDN LOOPING -->
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.alert-message').alert().delay(3000).slideUp('slow');
</script>
</body>
</html>