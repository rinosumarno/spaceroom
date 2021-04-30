<section id="main-content">
	<section class="wrapper">
		<h3><i class="fa fa-angle-right"></i>Edit Slide Show Home</h3>
		<?php foreach ($slide as $slide1) { ?>
			<form action="<?php echo base_url() . 'admin/update_slide' ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label>Judul Slide Home</label>
					<input type="hidden" name="id" value="<?php echo $slide1->id_slide; ?>">
					<input class="form-control" type="text" name="judul_slide" value="<?php echo $slide1->judul_slide; ?>">
				</div>

				<div class="form-group">
					<label>Gambar</label>
					<img src="<?php echo base_url(); ?>assets/galery/slide/<?= $slide1->gambar; ?>" style="width: 50%; margin-bottom: 15px;" alt="" />
					<input class="form-control" type="file" name="foto">
				</div>

				<div class="form-group">
					<input type="submit" value="Simpan" class="btn btn-primary">
				</div>
			</form>
		<?php } ?>
	</section>
</section>