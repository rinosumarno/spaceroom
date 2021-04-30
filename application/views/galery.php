<!DOCTYPE html>
<!--
	ubusina by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com
-->
<html lang="en">
<body>
	

								<!-- about section -->
								<section class="about text-center" id="about">
									<div class="container">
										<div class="row" >
											<h2>PAKET FOTO</h2>
											<h4>Kami menyediakan berbagai Kategori Paket Foto yang tersedia di MARI PRO PHOTO STUDIO </h4>
											
												<br>
												<br>
											</div>
										</div>

										
									</div>
								</div>
								<?php foreach ($galery as $galery) {
												?>
												<div class="tai">
									<div class="col-md-5 col-sm-8">
										<br>
										<br>
										<div class="single-about-detail clearfix">
											<div class="about-img" >
												<a href="<?php echo base_url();?>assets/galery/<?=$galery->gambar;?>"><img src="<?php echo base_url();?>assets/galery/<?=$galery->gambar;?>" >
													</a>
											</div>
										</div>
									</div>
									</div>
									
								<?php } ?>
							</section><!-- end of about section -->


							<!-- service section starts here -->


 <!-- Javascript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    	<script>window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')</script>
    	<script src="perth/js/bootstrap.min.js"></script>
    	<script src="perth/js/wow.min.js"></script>
    	<script src="perth/js/main.js"></script>

    	<script>
    		new WOW().init();
    	</script>



    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="keywords" content="footer, address, phone, icons" />

    	<title>Footer With Address And Phones</title>


    	<link rel="stylesheet" href="<?php echo base_url().'css/footer-distributed-with-address-and-phones.css'?>">





    	<footer style="margin-left: 0px;" class="footer-distributed">

    		<div class="footer-left">

    			<h3  style="margin-left: 100px;" >Mari<span>Pro</span></h3>

    			<p  style="margin-left: 100px;" class="footer-links">
    				
    			<?php if($this->session->userdata('id_agt')) { ?>
    			<li style="margin-left: 135px; " ><?php echo anchor('admin/logout', 'LOGOUT');?></li>
    			<?php } else { ?>
    			<li style="margin-left: 140px;" ><?php echo anchor('welcome/login', 'LOGIN');?></li>
    			<?php } ?>
    			<br>
    			
    			
    			<a style="margin-left: 130px;" href="<?php echo base_url().'welcome/register_view'?>">REGISTER</a>		
    			<br>
    			<br>
    			</p>

    			<p  style="margin-left: 100px;" class="footer-company-name">Mari Pro Photo &copy; 2019</p>
    		</div>

    		<div class="footer-center">

    			<div>
    				<i class="fa fa-map-marker"></i>
    				<p><span>Jl.Margonda Raya No. 517 </span>Pondok Cina, Depok</p>
    			</div>

    			<div>
    				<i class="fa fa-phone"></i>
    				<p>(021) 7875 317</p>
    			</div>

    			<div>
    				<i class="fa fa-envelope"></i>
    				<p><a href="mailto:support@company.com">mariprops@gmail.com</a></p>
    			</div>

    		</div>

    		<div class="footer-right">

    			<p class="footer-company-about">
    				<span>Mari Pro Photo Studio</span>

    			</p>

    			<div style="margin:35px;" class="footer-icons">

    				<a href="https://web.facebook.com/mariprophoto/?ref=page_internal"><i class="fa fa-facebook"></i></a>
    				<a href="#"><i class="fa fa-twitter"></i></a>


    			</div>

    		</div>

    	</footer>

    </body>

    </html>




	<!-- script tags
		============================================================= -->
		<script src="js/jquery-2.1.1.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script src="js/gmaps.js"></script>
		<script src="js/smoothscroll.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/custom.js"></script>

	</body>
	</html>