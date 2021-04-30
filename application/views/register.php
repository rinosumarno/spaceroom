<title>Register Member Space Room</title>
<link rel="icon" type="image/png" style="width: 50px;" href="<?php echo base_url().'img/pemkot.png' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./styleregist/css/bootstrap.css' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'./styleregist/css/bootstrap.min.css' ?>">
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex " style="background: url('../img/pemkot.png'); background-size: auto; background-repeat: no-repeat; background-position: center;">
           <!-- Background image for card set in CSS! -->
         </div>
         <div class="card-body">
          <h5 class="card-title text-left">Daftar User Space Room</h5>

          <form method="post" action="<?php echo base_url().'welcome/register' ?>">
            <div class="form-group">
              <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
              <?php echo form_error('username'); ?>
            </div>

            <div class="form-group">
              <input type="text" id="nama_user" name="nama_user" class="form-control" placeholder="Nama Lengkap" required autofocus>
              <?php echo form_error('nama_user'); ?>
            </div>          

            <div class="form-group">
              <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
              <?php echo form_error('password'); ?>
            </div>

            <div class="form-group">
              <input type="password" id="ulangi_password" name="ulangi_password" class="form-control" placeholder="Ulangi Password" required>
              <?php echo form_error('ulangi_password'); ?>
            </div>


            <div class="form-group">
              <input type="text" id="notelp" name="notelp" class="form-control" placeholder="No Telp" required>
              <?php echo form_error('notelp'); ?>
            </div>

            <div class="form-group">
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" required>
              <?php echo form_error('alamat'); ?>
            </div>    

            <div class="form-group">
              <input type="text" id="email" name="email" class="form-control" placeholder="Email Address" required>
              <?php echo form_error('email'); ?>
            </div>

            <div class="form-group"></div>
            <input class="btn btn-lg btn-primary btn-block text-uppercase" value="DAFTAR" type="submit">
            <a class="d-block text-center mt-3 small" href="<?php echo base_url().'welcome/login' ?>" class="btn btn-lg btn-primary btn-block text-uppercase"><b>Sudah Punya Akun?</b></a>

            <hr class="my-4">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('.alert-message').alert().delay(3000).slideUp('slow');
</script>
</body>

