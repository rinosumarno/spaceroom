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
    <h3><i class="fa fa-angle-right"></i>Tambah User</h3>
  <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">

             <form action="<?php echo base_url().'admin/tambah_user_act' ?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                
                
                <div class="form-group last">
                  <div class="col-lg-12">
           
                <div class="form-group">
                  <label class="control-label col-md-3">Username</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " size="16" type="text"  name="username" class="form-control" maxlength="50" placeholder="Username">
                    <?php echo form_error('username'); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Nama Lengkap</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " size="16" type="text"  name="nama_user" class="form-control" maxlength="50" placeholder="Nama Lengkap">
                    <?php echo form_error('nama_user'); ?>
                  </div>
                </div>


                <div class="form-group">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " size="16" type="gender"  name="gender" class="form-control" maxlength="50" placeholder="">
                    <?php echo form_error('gender'); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">No. telepon</label>
                  <div class="col-md-3 col-xs-11">
                    <input  class="form-control form-control-inline input-medium " size="16" type="read" readonly=""  name="no_telp" value='User' maxlength="50" placeholder="0823132">
                    <span style="margin-left:5px;"></span> 
                    <?php echo form_error('no_telp'); ?>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">alamat</label>
                  <div class="col-md-3 col-xs-11">
                    <input  class="form-control form-control-inline input-medium " size="16" type="read" readonly=""  name="alamat" value='User' maxlength="50" placeholder="Alamat Lengkap"> 
                    <span style="margin-left:5px;"></span> 
                    <?php echo form_error('alamat'); ?>
                  </div>
                </div>

                  <div class="form-group">
                  <label class="control-label col-md-3">Password</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " size="16" type="password" name="password" class="form-control" maxlength="12" placeholder="Maximal 12 Karakter">
                   <?php echo form_error('password'); ?>
                  </div>
                </div>
                

                 
                 
                    
                     

                 
          <input type="submit" value="Tambah" class="btn btn-theme btn-md">
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
