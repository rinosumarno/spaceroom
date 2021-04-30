<!DOCTYPE html>
<!--
  ubusina by freshdesignweb.com
  Twitter: https://twitter.com/freshdesignweb
  URL: https://www.freshdesignweb.com
-->
<html lang="en">
<body>

  <!-- ====================================================
    header section -->
    
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url('<?php echo base_url();?>assets/galery/slide/room4.png');">

      <div class="title-event t-center m-b-52">
        <span class="tit2 p-l-15 p-r-15" style="font-size: 60px;">Gallery</span>
        <h4 class="tit6 t-center p-l-15 p-r-15 p-t-3" style="font-size: 50px; color: #cf5d42; text-shadow: 6px 3px #ccc">
          Space Room
        </h4>
      </div>
    </section>


    <section class="section-ourmenu bg2-pattern p-t-30 about text-center">
      <div class="container">
        <div class="row">

          <!-- about section -->
          <div class="row">
           <?php
           $no = 1;
           foreach($galery as $b){
            $id_ruangan = $b->id_ruangan;
             ?>
             <div class="col-lg-3">
               <a href="<?php echo base_url();?>assets/galery/datagalery/<?=$b->gambar;?>">
                <div class="zoomeffect">
                  <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-4">

                    <li style="padding:10px;">

                     <img src="<?php echo base_url();?>assets/galery/datagalery/<?=$b->gambar;?>" style="width: 100%; height: 200px; border: 3px solid #ec8a19;">

                   </li>
                 </div>
               </div>
             </a> 
           </div>

         <?php } ?>
         <div class="col-md-12">
         <a href="<?php echo base_url('galery') ?>"> 
          <button class="btn btn-lg btn-primary center-block text-uppercase m-b-8 m-t-8">
            Booking
          </button>
        </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
  <span class="symbol-btn-back-to-top">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
  </span>
</div>
</section><!-- end of about section -->
<!-- service section starts here -->
  <!-- script tags
    ============================================================= -->
    
    <!-- Javascript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')</script>
      <script src="<?php echo base_url('../perth/js/bootstrap.min.js')?>"></script>
      <script src="<?php echo base_url('../perth/js/wow.min.js')?>"></script>
      <script src="<?php echo base_url('../perth/js/main.js')?>"></script>
      
      <script>
        new WOW().init();
      </script>
      <script>
        function myFunction() {
          alert("Maaf anda harus login terlebih dahulu");
        }
      </script>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="footer, address, phone, icons" />

      <title>Footer With Address And Phones</title>


      <link rel="stylesheet" href="<?php echo base_url().'css/footer-distributed-with-address-and-phones.css'?>">

      <footer class="dark-div footer-distributed">

        <div class="footer-left" class="col-md-12">
          Dinas Komunikasi dan Informatika | Pemerintah Kota Depok<br />Gedung Dibaleka II Komplek Balaikota Depok Lantai 7,<br /> Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402276 dan (021) 7764410,<br /> Email : diskominfo@depok.go.id                            </div>

          <!--h3  style="margin-left: 50px;" ><img src="<?php echo base_url().'img/pemkot.png'?>" alt=""></h3>

          <p  style="margin-left: 100px;" class="footer-links">
            
           <?php if($this->session->userdata('id_agt')) { ?>
             <li style="margin-left: 60px; " ><?php echo anchor('admin/logout', 'LOGOUT');?></li>
           <?php } else { ?>
             <li style="margin-left: 60px;" ><?php echo anchor('welcome/login', 'LOGIN');?></li>
           <?php } ?>
           <br>
        <a style="margin-left: 60px;" href="<?php echo base_url().'welcome/register_view'?>">REGISTER</a>    
           <br>
           <br>
         </p>


       </div>

       <div class="footer-center">

         <div style="text-align: center;">
          <i class="fa fa-map-marker"></i>
          <p><span>Jl.Margonda Raya No. 54, Kec.Pancoran Mas </span>Kota Depok, Jawa Barat 16431</p>

          <div>
            <i class="fa fa-envelope-square"></i>
            <p>admspaceroom@gmail.com</p>

            <div>
              <i class="fa fa-chrome"></i>
              <p>beritadepok.go.id</p>

              <div>
                <i class="fa fa-phone"></i>
                <p>(021) 777 3610</p>
              </div!-->

            </div>
          </div>


        </div>

        <!--div class="footer-right">


         <p class="footer-company-about">


           <div style="margin-right:100px;" class="footer-icons">



           </div>

         </div!-->

       </footer>

       
       <script src="js/jquery-2.1.1.js"></script>
       <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
       <script src="js/gmaps.js"></script>
       <script src="js/smoothscroll.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="js/custom.js"></script>

     </body>
     </html>