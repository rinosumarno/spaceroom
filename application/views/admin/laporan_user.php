<div class="page-header">
  <h3>Data user</h3>
</div>
<a class="btn btn-default btn-md" href="<?php echo base_url().'admin/laporan_print_user' ?>">
  <span class="glyphicon glyphicon-print"></span>
Print</a>
<a class="btn btn-warning btn-md" href="<?php echo base_url().'admin/laporan_pdf_user' ?>">
  <span class="glyphicon glyphicon-print"></span>
Cetak PDF</a>
<br><br>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama user</th>
        <th>No.Telpon</th>
        <th>Alamat</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($user as $a) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $a->nama_user ?></td>
        <td><?php echo $a->no_telp ?></td>
        <td><?php echo $a->alamat ?></td>
        <td><?php echo $a->email ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
