<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i>Laporan</h3>
    <div class="row mt">
      <!--  DATE PICKERS -->
      <div class="col-lg-12">
        <div class="form-panel">

          <form method="post" action="<?php echo base_url().'admin/laporan_transaksi'?>" class="form-horizontal style-form">

            <div class="form-group">
              <label class="control-label col-md-3">Dari Tanggal</label>
              <div class="col-md-3 col-xs-11">
                <input name="dari" class="form-control" size="16" type="date" value="<?php echo set_value('dari'); ?>">
                <?php echo form_error('dari'); ?>
                <span class="help-block">Select date</span>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Sampai Tanggal</label>
              <div class="col-md-3 col-xs-11">
                <input name="sampai" class="form-control" size="16" type="date" value="<?php echo set_value('sampai'); ?>">
                <?php echo form_error('sampai'); ?>
                <span class="help-block">Select date</span>
              </div>
            </div>

            <div class="form-group">
              <div class="text-center">
                <input type="submit" value="CARI" name="cari" class="btn btn-md btn-theme">
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>



    <div class="col-md-12 mt">
      <div class="content-panel">
        <table class="table table-hover">
          <h4><i class="fa fa-angle-right"></i> Laporan Booking</h4>

          <hr>
          <thead>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Kode Booking</th>

            <th style="text-align: center;">Nama User</th>
            <th style="text-align: center;">Email</th>
            <th style="text-align: center;">Jam Booking</th>
            <th style="text-align: center;">Tanggal</th>
            <th style="text-align: center;">No Telepon</th>
            <th style="text-align: center;">Alamat</th>
            <th style="text-align: center;">Status Booking</th>

          </tr>

          <tbody>
            <?php
            $no = 1;
            foreach($laporan as $p){
              ?>
              <tr>
                <td style="text-align: center;"><?php echo $no++;?></td>
                <td style="text-align: center;"><?php echo $p->id_booking;?></td>
                <td style="text-align: center;"><?php echo $p->nama; ?></td>
                <td style="text-align: center;"><?php echo $p->email; ?></td>
                <td style="text-align: center;"><?php echo $p->jam; ?></td>
                <td style="text-align: center;"><?php echo $p->tgl; ?></td>
                <td style="text-align: center;"><?php echo $p->notelp; ?></td>
                <td style="text-align: center;"><?php echo $p->almt; ?></td>
                <td style="text-align: center;"><?php echo $p->status; ?></td>

              </tr>
              <?php
            }
            ?>
          </tbody>
          <div class="btn-group">

           <a class="btn btn-default btn-sm" href="<?php echo base_url().'admin/laporan_print_transaksi/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><span class="glyphicon glyphicon-print"></span>
           Print</a>
         </div>
       </table>
     </div>
   </div>
 </section>
</section>
