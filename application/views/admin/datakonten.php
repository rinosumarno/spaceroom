<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Edit Konten Tentang </h3>
    <div class="row mb">
      <!-- page start-->
      <div class="col-md-12">
        <div class="content-panel" style="padding-top: 5px;">
          <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
              <h4><a href="<?php echo base_url() . 'admin/tambah_konten'; ?>" class="btn btn-warning btn-md"><span class="fa fa-plus"></span> Tambah Konten </a> </h4>
              <thead>
                <tr>
                  <th>
                    <center>No</center>
                  </th>
                  <th>
                    <center><i></i> Judul</center>
                  </th>
                  <th>
                    <center><i></i> Deskripsi</center>
                  </th>
                  <th>
                    <center><i class="fa fa-cogs"></i> Opsi</center>
                  </th>
                </tr>
              </thead>

              <tbody>

                <?php
                $no = 1;
                foreach ($konten as $b) {
                ?>

                  <tr>
                    <td>
                      <center><?php echo $no++; ?></center>
                    </td>
                    <td>
                      <center><?php echo $b->judul ?></center>
                    </td>
                    <td style="white-space: pre-line;">
                      <center><?php echo $b->deskripsi ?>
                    </td>


                    <td>

                      <center><a style="margin-bottom: 10px;" class="btn btn-primary btn-sm" href="<?php echo base_url() . 'admin/edit_konten/' . $b->id_konten; ?>"><span class="glyphicon glyphicon-zoom-in"> </span></a>
                        <a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/hapus_konten/' . $b->id_konten; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </section>
</section>


<script src="<?php echo base_url() . './admn/lib/bootstrap/js/bootstrap.min.js' ?>"></script>
<script class="include" type="text/javascript" src="<?php echo base_url() . './admn/lib/jquery.dcjqaccordion.2.7.js' ?>"></script>
<script src="<?php echo base_url() . './admn/lib/jquery.scrollTo.min.js' ?>"></script>
<script src="<?php echo base_url() . './admn/lib/jquery.nicescroll.js' ?>" type="text/javascript"></script>
<script src="<?php echo base_url() . './admn/ib/jquery.sparkline.js' ?>"></script>
<!--common script for all pages-->
<script src="<?php echo base_url() . './admn/lib/common-scripts.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . './admn/lib/gritter/js/jquery.gritter.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . './admn/ib/gritter-conf.js' ?>"></script>
<!--script for this page-->
<script src="<?php echo base_url() . './admn/lib/sparkline-chart.js' ?>"></script>
<script src="<?php echo base_url() . './admn/lib/zabuto_calendar.js' ?>"></script>
<script type="text/javascript">

</script>