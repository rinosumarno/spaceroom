<div class="page-header">
  <h3>Cetak Data paket</h3>
</div>
<a class="btn btn-default btn-md" href="<?php echo base_url().'admin/laporan_print_paket' ?>">
  <span class="glyphicon glyphicon-print"></span>
Print</a>
<a class="btn btn-warning btn-md" href="<?php echo base_url().'admin/laporan_pdf_paket' ?>">
  <span class="glyphicon glyphicon-print"></span>
Cetak PDF</a>
<br><br>
<div class="table-responsive">
  <table class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
        <th>No</th>

        <th>Durasi Sewa</th>
        <th>Deskripsi</th>
        <th>Harga</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($paket as $b) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>

        <td><?php echo $b->nama_paket ?></td>
        <td><?php echo $b->deskripsi ?></td>
        <td><?php echo $b->harga ?></td>
        
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
