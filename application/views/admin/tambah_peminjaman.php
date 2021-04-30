<div class="page-header">
	<h3>Transaksi Baru</h3>
</div>
<?php foreach ($paket as $key) { ?>
<form action="<?php echo base_url().'admin/tambah_peminjaman_act/' ?>" method="post">
	<?php
		$id = $key->id_paket+1;
	?>
		<input type="hidden" name="id" value="<?php echo $id ?>">
	<?php } ?>
	<div class="form-group">
		<label>user</label>
		<select name="user" class="form-control">
			<option value="">-Pilih user-</option>
			<?php foreach($user as $a){ ?>
			<option value="<?php echo $a->id_user; ?>"><?php echo $a->nama_user; ?></option>
			<?php } ?>
		</select>
		<?php echo form_error('user'); ?>
	</div>

	<div class="form-group">
		<label>paket</label>
		<select name="paket" class="form-control">
			<option value="">-Pilih paket-</option>
			<?php foreach($paket as $b){ ?>
			<option value="<?php echo $b->id_paket; ?>"><?php echo $b->judul_paket; ?></option>
			<?php } ?>
		</select>
		<?php echo form_error('paket'); ?>
	</div>

	<div class="form-group">
		<label>Tanggal Pinjam</label>
		<input type="date" name="tgl_pinjam" class="form-control">
		<?php echo form_error('tgl_pinjam'); ?>
	</div>

	<div class="form-group">
		<label>Tanggal Kembali</label>
		<input type="date" name="tgl_kembali" class="form-control">
		<?php echo form_error('tgl_kembali'); ?>
	</div>

	<div class="form-group">
		<label>Harga Denda / Hari</label>
		<input type="text" name="denda" class="form-control">
		<?php echo form_error('denda'); ?>
	</div>

	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btnprimary btn-sm">
	</div>
</form>