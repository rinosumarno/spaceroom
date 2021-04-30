<!DOCTYPE html>
<html>

<body>

<!-- ====================================================
  header section -->

  <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('<?php echo base_url();?>assets/galery/slide/room4.png');">

    <div class="title-event t-center m-b-52">
      <span class="tit2 p-l-15 p-r-15" style="font-size: 60px;">GANTI PASSWORD</span>
      <h4 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="font-size: 50px; color: #cf5d42; text-shadow: 6px 3px #ccc">
        Space Room
      </h4>
    </div>
  </section>

  <div style="text-align: center;" class="page-header"  >
   <h3>Ganti Password</h3>
 </div>
 <div class="row" style="padding: 50px;">
  <div class="col-md-6 col-md-offset-3">
    <?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "berhasil"){
       echo "<div class='alert alert-success'>Password berhasil di ganti.</div>";
     }
   }
   ?>
   <form action="<?php echo base_url().'member/gantipass_act'; ?>" method="post">
     <div class="form-group">
      <label>Password Baru</label>
      <input class="form-control" type="password" name="pass_baru">
      <?php echo form_error('pass_baru'); ?>
    </div>

    <div class="form-group">
      <label>Ulangi Password Baru</label>
      <input class="form-control" type="password" name="ulang_pass">
      <?php echo form_error('ulang_pass'); ?>
    </div>

    <div class="form-group">
      <input class="btn btn-primary btn-sm" type="submit" value="Simpan">
    </div>
  </form>
</div>
</div>

<!-- Javascript --->
<title>Footer With Address And Phones</title>


<link rel="stylesheet" href="<?php echo base_url().'css/footer-distributed-with-address-and-phones.css'?>">





<footer class="dark-div footer-distributed">

  <div class="footer-left" class="col-md-12">
    Dinas Komunikasi dan Informatika | Pemerintah Kota Depok<br />Gedung Dibaleka II Komplek Balaikota Depok Lantai 7,<br /> Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402276 dan (021) 7764410,<br /> Email : diskominfo@depok.go.id</div>

  </footer>

</body>

</html>