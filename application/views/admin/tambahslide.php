      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!--external css-->
      <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() . './admn/lib/bootstrap-fileupload/bootstrap-fileupload.css' ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() . './admn/lib/bootstrap-datepicker/css/datepicker.css' ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() . './admn/lib/bootstrap-daterangepicker/daterangepicker.css' ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() . './admn/lib/bootstrap-timepicker/compiled/timepicker.css' ?>" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() . './admn/lib/bootstrap-datetimepicker/datertimepicker.css' ?>" />
      <!-- Custom styles for this template -->
      <link href="<?php echo base_url() . './admn/css/style.css' ?>" rel="stylesheet">
      <link href="<?php echo base_url() . './admn/css/style-responsive.css' ?>" rel="stylesheet">

      <section class="wrapper">
      	<section id="main-content">
      		<h3 style="text-align: center;"><b>Slide Show Home</b></h3>
      		<div class="row">
      			<!-- page start-->
      			<div class="col-lg-12">
      				<div class="form-panel" style="padding: 25px;">
      					<form action="<?php echo base_url() . 'admin/slide_act' ?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">

      						<div class="form-group">
      							<label>Judul Slide Home</label>
      							<input class="form-control" type="text" name="judul_slide">

      						</div>

      						<div class="form-group">
      							<label>Gambar</label>
      							<input class="form-control" type="file" name="foto">
      							<p>* Harap Mengupload foto dengan Size <1 Mb dan format <span style="color: red;">PNG/JPG/Jpeg</p></span>
      						</div>

      						<div class="form-group">
      							<center><input type="submit" value="Update" class="btn btn-primary"></center>
      						</div>
      					</form>
      				</div>
      	</section>
      </section>