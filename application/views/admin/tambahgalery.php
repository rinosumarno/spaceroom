<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--external css-->
<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./admn/lib/bootstrap-fileupload/bootstrap-fileupload.css' ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./admn/lib/bootstrap-datepicker/css/datepicker.css' ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./admn/lib/bootstrap-daterangepicker/daterangepicker.css' ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./admn/lib/bootstrap-timepicker/compiled/timepicker.css' ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./admn/lib/bootstrap-datetimepicker/datertimepicker.css' ?>" />
<!-- Custom styles for this template -->
<link href="<?php echo base_url().'./admn/css/style.css' ?>" rel="stylesheet">
<link href="<?php echo base_url().'./admn/css/style-responsive.css' ?>" rel="stylesheet">


<section id="main-content">
  <section class="wrapper site-min-height">
    <h3><i class="fa fa-angle-right"></i>Tambah Galery</h3>
    <div class="row mt">
      <div class="col-lg-12">
        <div class="form-panel">

         <form action="<?php echo base_url().'admin/galery_act' ?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">  
          <div class="form-group last">
            <div class="col-lg-12">

              <div class="form-group">
                <label class="control-label col-md-3">Gambar</label>
                <div class="col-md-3 col-xs-11">
                  <input class="form-control form-control-inline input-medium " size="16" type="file"  name="foto" class="form-control">
                </div>
              </div>             
              <div class="form-group">
                <label class="control-label col-md-3">Ruangan</label>
                <div class="col-md-3 col-xs-11">
                  <select class="form-control" name="id_ruangan">
                    <?php foreach ($ruangan as $value) {
                      ?>
                      <option value="<?= $value->id_ruangan ?>"> <?= $value->nama ?> </option>
                      <?php } ?>
                    </select>
                  </div>   
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">
                      Gambar Default untuk raungan <small>(aktifkan jika gambar sebagai default)</small>
                    </label>
                    <div class="col-md-3 col-xs-11">
                        <input type="radio" name="aktif" value="aktif" style="padding:10px;">
                        Aktif
                        <input type="radio" name="aktif" value="-" checked="" style="padding:10px;">
                        Tidak Aktif
                      </div>
                    </div>

                    <input type="submit" value="Simpan" class="btn btn-theme btn-md">
                    <br><br>

                  </div>
                </div>
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
      </section>
      <!-- /wrapper -->
    </section>

    <script src="<?php echo base_url().'./admn/lib/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url().'./admn/lib/bootstrap/js/bootstrap.min.js' ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url().'./admn/lib/jquery.dcjqaccordion.2.7.js' ?>"></script>
    <script src="<?php echo base_url().'./admn/lib/jquery.scrollTo.min.js' ?>"></script>
    <script src="<?php echo base_url().'./admn/lib/jquery.nicescroll.js' ?>" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="<?php echo base_url().'./admn/lib/common-scripts.js' ?>"></script>
    <!--script for this page-->
    <script src="<?php echo base_url().'./admnlib/jquery-ui-1.9.2.custom.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'./admn/lib/bootstrap-fileupload/bootstrap-fileupload.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'./admn/lib/bootstrap-datepicker/js/bootstrap-datepicker.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'./admn/lib/bootstrap-daterangepicker/date.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'./admn/lib/bootstrap-daterangepicker/daterangepicker.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'./admn/lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'./admn/lib/bootstrap-daterangepicker/moment.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'./admn/lib/bootstrap-timepicker/js/bootstrap-timepicker.js' ?>"></script>
    <script src="<?php echo base_url().'./admn/lib/advanced-form-components.js' ?>"></script>
