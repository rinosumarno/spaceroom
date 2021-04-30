<div class="page-header">
	<h3>Transaksi Selesai</h3>
</div>
<?php foreach($peminjaman as $p){ ?>
<form action="<?php echo base_url().'admin/transaksi_selesai_act' ?>" method="post">
	<input type="hidden" name="id" value="<?php echo $p->id_pinjam ?>">
	<input type="hidden" name="paket" value="<?php echo $p->id_paket ?>">
	<input type="hidden" name="tgl_kembali" value="<?php echo $p->tgl_kembali ?>">
	<input type="hidden" name="denda" value="<?php echo $p->denda ?>">
	<div class="form-group">
		<label>user</label>
		<select class="form-control" name="user" disabled>
			<option value="">-Pilih user-</option>
			<?php foreach($user as $k){ ?>
				<option <?php if($p->id_user == $k->id_user){echo "selected='selected'";} ?> value="<?php echo $k->id_user; ?>"><?php echo $k->nama_user; ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="form-group">
		<label>paket</label>
		<select class="form-control" name="paket" disabled>
			<option value="">-Pilih paket-</option>
			<?php foreach($paket as $m){ ?>
			<option <?php if($p->id_paket == $m->id_paket){echo "selected='selected'";} ?> value="<?php echo $m->id_paket; ?>"><?php echo $m->judul_paket; ?></option>
			<?php } ?>
		</select>
	</div>

	<div class="form-group">
		<label>Tanggal Pinjam</label>
		<input class="form-control" type="date" name="tgl_pinjam" value="<?php echo $p->tgl_pinjam ?>" 
		disabled>
	</div>

	<div class="form-group">
		<label>Tanggal Kembali</label>
		<input class="form-control" type="date" name="tgl_kembali" value="<?php echo $p->tgl_kembali ?>"disabled>
	</div>

	<div class="form-group">
		<label>Harga Denda / Hari</label>
			<input class="form-control" type="text" name="denda" value="<?php echo $p->denda ?>" disabled>
	</div>

	<div class="form-group">
		<label>Tanggal Dikembalikan Oleh user</label>
		<input class="form-control" type="date" name="tgl_dikembalikan">
		<?php echo form_error('tgl_dikembalikan'); ?>
	</div>
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btnprimary btn-sm">
	</div>
</form>
<?php } ?>