<title>Login Space Room</title>
<link rel="icon" type="image/png" style="width: 50px;" href="<?php echo base_url() . 'img/pemkot.png' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/stylelogin/css/bootstrap.css' ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . './stylelogin/css/bootstrap.min.css' ?>">
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>

<body>

  <?php
  if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
      echo "<div class='alert alert-danger alert-danger'>";
      echo $this->session->flashdata('alert');
      echo "</div>";
    } else if ($_GET['pesan'] == "logout") {
      if ($this->session->flashdata()) {
        echo "<div class='alert alert-danger alert-success'>";
        echo $this->session->flashdata('Anda Telah Logout');
        echo "</div>";
      }
      //echo "<div class='alert alert-success'>Anda telah logout.</div>";
    } else if ($_GET['pesan'] == "belumlogin") {
      if ($this->session->flashdata()) {
        echo "<div class='alert alert-danger alert-primary'>";
        echo $this->session->flashdata('alert');
        echo "</div>";
      }
      //echo "<div class='alert alert-primary'>Silahkan login dulu.</div>";
    }
  } else {
    if ($this->session->flashdata()) {
      echo "<div class='alert alert-danger alert-message'>";
      echo $this->session->flashdata('alert');
      echo "</div>";
    }
  }
  ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex " style="background: url('../img/pemkot.png'); background-size: auto; background-repeat: no-repeat; background-position: center;">
            <!-- Background image for card set in CSS! -->
          </div>

          <div class="card-body">
            <h5 class="card-title text-center"></h5>
            <h5 class="card-title text-center">Login</h5>



            <form method="post" action="<?php echo  base_url() . 'welcome/login' ?>">
              <div class="form-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="username" required autofocus>
                <?php echo form_error('username'); ?>
              </div>

              <div class="form-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="password" required>
                <?php echo form_error('password'); ?>
              </div>


              <div class="form-group"></div>
              <input class="btn btn-lg btn-primary btn-block text-uppercase" value="Login" type="submit">
              <a class="d-block text-center mt-3 small" href="<?php echo base_url() . 'welcome/register_view' ?>" class="btn btn-lg btn-primary btn-block text-uppercase">
                <b>Belum Punya akun?</b></a>
              <a class="d-block text-center mt-3 small" href="<?php echo base_url('welcome/lupa_pass') ?>"><b>Lupa password !!</b></a>


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