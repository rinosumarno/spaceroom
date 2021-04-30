<div class="page-header">
	<h3>Edit Paket</h3>
</div>
<?php foreach($paket as $b){ ?>
<form action="<?php echo base_url().'admin/update_paket' ?>" method="post" enctype="multipart/form-data">
	<div hidden="" class="form-group">
		<label>Kategori</label>
		<select hidden="" name="id_kategori" class="form-control">
			<option value="<?php echo $b->id_kategori; ?>"><?php echo $b->nama_kategori; ?></option>
			<?php foreach($kategori as $k){ ?>
			<option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama_kategori; ?></option>
			<?php } ?>
		</select>
		<?php echo form_error('id_kategori'); ?>
	</div>

	<div class="form-group">
		<label>Nama Paket</label>
		<input type="hidden" name="id" value="<?php echo $b->id_paket; ?>">
		<input class="form-control" type="text" name="nama_paket" value="<?php echo $b->nama_paket; ?>">
		<?php echo form_error('nama_paket'); ?>
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<input class="form-control" type="text" name="deskripsi" value="<?php echo $b->deskripsi; ?>">
		<?php echo form_error('deskripsi'); ?>
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input class="form-control" type="text" name="harga" value="<?php echo $b->harga; ?>" >
		<?php echo form_error('harga'); ?>
	</div>

	<dir class="form-group">
		<label>Gambar</label>
		<?php
			if(isset($b->gambar)){
				echo '<input type="hidden" name="old_pict" value="'.$b->gambar.'">';
				echo '<img src="'.base_url().'assets/upload/'.$b->gambar.'" width="30%">';
			}
		?>
		<input name="foto" type="file" class="form-control">
	</dir>

	<div class="form-group">
		<input type="submit" value="Update" class="btn btnprimary">
	</div>
</form>
<?php } ?>