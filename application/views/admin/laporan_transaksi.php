<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Laporan Booking</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form method="post" action="<?php echo base_url().'admin/laporan_transaksi'?>" class="form-horizontal style-form">
                <div class="form-group">
                  <label class="control-label col-md-3">Dari Tanggal</label>
                  <div class="col-md-3 col-xs-11">
                    <input name="dari" class="form-control" size="16" type="date" >
                    <?php echo form_error('dari'); ?>
                   
                  </div>
                </div>

                 <div class="form-group">
                  <label class="control-label col-md-3">Sampai Tanggal</label>
                  <div class="col-md-3 col-xs-11">
                    <input name="sampai" class="form-control" size="16" type="date" >
                    <?php echo form_error('sampai'); ?>
                  
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
      </section>
    </section>