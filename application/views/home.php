<!-- ====================================================
  header section -->  
  <section class="section-slide">
    <div class="wrap-slick1">
      <div class="slick1">


        <?php
        $no = 1;
        foreach($slide as $b){
         ?>
         <div class="item-slick1 item1-slick1" style="background-image: url(assets/galery/slide/<?=$b->gambar;?>);">

          <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">


            <span class="caption1-slide1 txt1 t-center animated visible-false m-b-20" data-appear="fadeInUp" style="font-size: 40px;" >
              <?php echo $b->judul_slide ?>
            </span>

            <div class="wrap-btn-slide1 animated visible-false" data-appear="zoomIn">
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <div class="wrap-slick1-dots"></div>

    <!-- Controls -->
  </div>
</section>

<section class="section-welcome bg1-pattern p-t-20 p-b-105">
  <div class="container">
    <center>
      <span class="tit2 p-l-15 p-r-15" 
            style="font-size: 50px; color: #42b3e5; padding-top: 10px;" 
            id="jadwal"> 
            Schedule Booking Hari Ini
      </span>
    </center>
    <marquee behavior="alternate" 
             style="font-size: 25px; color: red">
      Atur Tanggal Booking-mu Agar Tidak Bentrok
    </marquee>
    <div class="page-content-wrapper">
      <div class="page-content">
        <div class="alert notification" style="display: none;">
          <button class="close" data-close="alert"></button>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="portlet light bordered">
              <div class="portlet-body">
                <!-- place -->
                <center>
                  <div id="calendarIO"></div>
                  <div class="modal fade" 
                       id="create_modal" 
                       tabindex="-1" 
                       role="dialog" 
                       aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form class="form-horizontal" method="POST" action="POST" id="form_create">
                          <input type="hidden" name="calendar_id" value="0">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Create calendar event</h4>
                          </div>
                          <div class="modal-body">

                            <div class="form-group">
                             <div class="alert alert-danger" style="display: none;"></div>
                           </div>
                           <div class="form-group">
                            <label  class="control-label col-sm-2">Title  <span class="required"> * </span></label>
                            <div class="col-sm-10">
                              <input readonly type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2">Description</label>
                            <div class="col-sm-10">
                              <textarea readonly name="description" rows="3" class="form-control"  placeholder="Enter description" style="height: 200px;"></textarea>
                            </div>
                          </div>

                          <div hidden="" class="form-group">
                            <label for="color" class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                              <select  name="color" class="form-control">
                                <option value="">Choose</option>
                                <option style="color:#0071c5;" value="#0071c5">&#9724; Dark blue</option>
                                <option style="color:#40E0D0;" value="#40E0D0">&#9724; Turquoise</option>
                                <option style="color:#008000;" value="#008000">&#9724; Green</option>                       
                                <option style="color:#FFD700;" value="#FFD700">&#9724; Yellow</option>
                                <option style="color:#FF8C00;" value="#FF8C00">&#9724; Orange</option>
                                <option style="color:#FF0000;" value="#FF0000">&#9724; Red</option>
                                <option style="color:#000;" value="#000">&#9724; Black</option>
                              </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="control-label col-sm-2">Start Date</label>
                            <div class="col-sm-10">
                              <div class="input-group input-medium date date-picker" data-date-format="yyyy-mm-dd" data-date-viewmode="years">
                                <input type="text" name="start_date" class="form-control" readonly>
                                <span class="input-group-addon"><i class="fa fa-calendar font-dark"></i></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">

                        </div>
                      </form>
                    </div>
                </div>
              </div>
            </center>
              <!-- end place -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<br><br>  
<section class="features-icons bg-light text-center">
  <div class="container">
    <div class="row">

     <span class="tit2 p-l-15 p-r-15" style="font-size: 50px; color: #42b3e5; "> Cara Booking Ruangan</span>
     <h3>Small Step to Booking</h3>
     <br>
     <div class="col-lg-4">
      <a href="<?php echo base_url('welcome/login'); ?>">
        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3" style="color: black;">
          <div class="features-icons-icon d-flex">
            <i class="icon-screen-desktop m-auto text-primary"></i>
          </div>
          <h3>STEP 1</h3>
          <img src="<?php echo base_url('img/login1.png'); ?>" style="width: 100px; height: 100px;">
          <h3>lOGIN</h3>
          <p class="lead mb-0" >User Dipersilahkan Login terlebih dahulu</p>
        </div>
      </a>
    </div>  
    <div class="col-lg-4">
     <a href="<?php echo base_url('welcome/register_view'); ?>">
      <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3" style="color: black;">
        <div class="features-icons-icon d-flex">
          <i class="icon-layers m-auto text-primary"></i>
        </div>
        <h3>STEP 2</h3>
        <img src="<?php echo base_url('img/regist1.png'); ?>" style="width: 100px; height: 100px;">
        <h3>Register</h3>
        <p class="lead mb-0">Jika belum punya account silahkan Register terlebih dahulu</p>
      </div>
    </a>
  </div>

  <div class="col-lg-4" onclick="myFunction()">
    <div class="features-icons-item mx-auto mb-0 mb-lg-3" style="color: black;" >
      <h3>STEP 3</h3>
      <img src="<?php echo base_url('img/form.png'); ?>" style="width: 100px; height: 100px;">
      <h3>Mengisi Form Booking</h3>
      <p class="lead mb-0">silahkan mengisi data - data di form yang sudah disediakan</p>
    </div>
    <script>
      function myFunction() {
        alert("Maaf anda harus login terlebih dahulu");
      }
    </script>
  </div>

  <div class="col-lg-4">
    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
      <div class="features-icons-icon d-flex">
        <i class="icon-check m-auto text-primary"></i>
      </div>
      <h3>STEP 4</h3>
      <img src="<?php echo base_url('img/detbok1.png'); ?>" style="width: 100px; height: 100px;">
      <h3>Detail Booking</h3>
      <p class="lead mb-0">Silahkan hubungi Admin yang tertera di Page Detail Booking</p>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
      <div class="features-icons-icon d-flex">
        <i class="icon-check m-auto text-primary"></i>
      </div>
      <h3>STEP 5</h3>
      <a href="#jadwal" style="color: black;"><img src="<?php echo base_url('img/vkalender.png'); ?>" style="width: 100px; height: 100px;">
        <h3>Jadwal Booking</h3>
        <p class="lead mb-0">Silahkan melihat jadwal booking anda</p></a>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="features-icons-item mx-auto mb-0 mb-lg-3">
        <div class="features-icons-icon d-flex">
          <i class="icon-check m-auto text-primary"></i>
        </div>
        <h3>Read</h3>
        <a href="#Tentang" style="color: black;"><img src="<?php echo base_url('img/about4.png'); ?>" style="width: 100px; height: 100px;">
          <h3>About</h3>
          <p class="lead mb-0">Tentang Ruangan ini</p>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br>  
<!----------------------------------------------------------------------Tentang----------------------------------------------------------------->
<section  id="main1">
 <div class="container" id="Tentang">
  <div class="row">
   <div class="col-xs-12 margin-20">
    <?php
    $no = 1;
    foreach($konten as $b){
     ?>
     <h3 style="text-align: center; font-size: 50px; color: #42b3e5"><?php echo $b->judul ?></h3>
     <h3 style="text-align: justify; padding: 15px; word-spacing: 10px; line-height: 1.3;"><?php echo $b->deskripsi ?></h3>
   <?php } ?>
 </div>
</div>
</div>
</section>

<!--------------------------------------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------LOKASI----------------------------------------------------------------->

<section class="container">
  <div class="row mb-5 justify-content-center" data-aos="fade">
    <div class="col-md-12 text-center heading-wrap">
      <br>
      <h1>Lokasi Ruangan Space Room</h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4686.152137019141!2d106.82082192286774!3d-6.3938910670908635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x2e69ec086a724fed%3A0xe794929dd620de0c!2sDinas%20Komunikasi%20dan%20Informatika%20(Diskominfo)%20Kota%20Depok%2C%20Jalan%20Margonda%20Raya%2C%20Depok%2C%20Kota%20Depok%2C%20Jawa%20Barat!3m2!1d-6.3947179!2d106.821049!5e1!3m2!1sid!2sid!4v1571024961201!5m2!1sid!2sid" width="80%" height="400" frameborder="0" style="  text-align: center;" allowfullscreen=""></iframe>
    </div>
  </div>
</section>
<!--------------------------------------------------------------------------------------------------------------------------------------------->
</section>
<div class="btn-back-to-top bg0-hov" id="myBtn">
  <span class="symbol-btn-back-to-top">
    <i class="fa fa-angle-double-up" aria-hidden="true"></i>
  </span>
</div>
    <!-- Javascript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="js/jquery-2.1.0.min.js"><\/script>')</script>
      <script src="<?php echo base_url().'./perth/js/bootstrap.min.js'?>"></script>
      <script src="<?php echo base_url().'./perth/js/bootstrap.min.js'?>perth/js/wow.min.js"></script>
      <script src="<?php echo base_url().'./perth/js/bootstrap.min.js'?>perth/js/main.js"></script>

      <script>
        new WOW().init();
      </script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="footer, address, phone, icons" />

      <title>Footer With Address And Phones</title>

      <link rel="stylesheet" href="<?php echo base_url().'css/footer-distributed-with-address-and-phones.css'?>">
      <footer class="dark-div footer-distributed">
        <div class="footer-justify" class="col-md-12">
          Dinas Komunikasi dan Informatika | Pemerintah Kota Depok<br />Gedung Dibaleka II Komplek Balaikota Depok Lantai 7,<br /> Jl. Margonda Raya No. 54 Depok, Telp.(021) 29402276 dan (021) 7764410,<br /> Email : diskominfo@depok.go.id
        </div>
      </footer>

      <script src="js/jquery-2.1.1.js"></script>
      <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
      <script src="js/gmaps.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/custom.js"></script>

      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/animsition/js/animsition.min.js' ?>"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/bootstrap/js/popper.js' ?>"></script>
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/select2/select2.min.js' ?>"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/daterangepicker/moment.min.js' ?>"></script>
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/daterangepicker/daterangepicker.js' ?>"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/slick/slick.min.js' ?>"></script>
      <script type="text/javascript" src="<?php echo base_url().'./pato/js/slick-custom.js' ?>"></script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/parallax100/parallax100.js' ?>"></script>
      <script type="text/javascript">
        $('.parallax100').parallax100();
      </script>
      <!--===============================================================================================-->
      <script type="text/javascript" src="<?php echo base_url().'./pato/vendor/countdowntime/countdowntime.js' ?>"></script>
      <!--===============================================================================================-->
      <!--===============================================================================================-->
      <script src="<?php echo base_url().'./pato/js/main.js' ?>"></script>
      <script type="text/javascript" src="<?php echo base_url().'assets2/js/jquery.min.js'; ?>"></script>      
      <script type="text/javascript" src="<?php echo base_url().'assets2/js/moment.min.js'; ?>"></script>      
      <script type="text/javascript" src="<?php echo base_url().'assets2/js/bootstrap.min.js'; ?>"></script>      
      <script type="text/javascript" src="<?php echo base_url().'assets2/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>      
      <script type="text/javascript" src="<?php echo base_url().'assets2/plugins/fullcalendar/fullcalendar.js'; ?>"></script>      
      <script type="text/javascript">
        var get_data        = '<?php echo $get_data; ?>';
        var backend_url     = '<?php echo base_url(); ?>';

        $(document).ready(function() {
          $('.date-picker').datepicker();
          $('#calendarIO').fullCalendar({
            header: {
              left: 'prev,next today',
              center: 'title',
              right: 'month,basicWeek,basicDay'
            },
            defaultDate: moment().format('YYYY-MM-DD'),
            editable: true,
                eventLimit: true, // allow "more" link when too many events
                selectable: true,
                selectHelper: true,
                select: function(start, end) {
                  $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
                  // $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
                  $('#create_modal').modal('show');
                  save();
                  $('#calendarIO').fullCalendar('unselect');
                },
                eventDrop: function(event, delta, revertFunc) { // si changement de position
                  editDropResize(event);
                },
                eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                  editDropResize(event);
                },
                eventClick: function(event, element)
                {
                  deteil(event);
                  editData(event);
                  deleteData(event);
                },
                events: JSON.parse(get_data)
              });
        });

        $(document).on('click', '.add_calendar', function(){
          $('#create_modal input[name=calendar_id]').val(0);
          $('#create_modal').modal('show');  
        })

        $(document).on('submit', '#form_create', function(){

          var element = $(this);
          var eventData;
          $.ajax({
            url     : backend_url+'calendar/save',
            type    : element.attr('method'),
            data    : element.serialize(),
            dataType: 'JSON',
            beforeSend: function()
            {
              element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
            },
            success: function(data)
            {
              if(data.status)
              {   
                eventData = {
                  id          : data.id,
                  title       : $('#create_modal input[name=title]').val(),
                  description : $('#create_modal textarea[name=description]').val(),
                  start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                // end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                color       : $('#create_modal select[name=color]').val()
              };
                        $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                        $('#create_modal').modal('hide');
                        element[0].reset();
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                      }
                      else
                      {
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html(data.notif);
                      }
                      element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                      element.find('button[type=submit]').html('Submit');
                      element.find('.alert').css('display', 'block');
                      element.find('.alert').html('Wrong server, please save again');
                    }         
                  });
          return false;
        })

        function editDropResize(event)
        {
          start = event.start.format('YYYY-MM-DD HH:mm:ss');
          if(event.end)
          {
            end = event.end.format('YYYY-MM-DD HH:mm:ss');
          }
          else
          {
            end = start;
          }

          $.ajax({
            url     : backend_url+'calendar/save',
            type    : 'POST',
            data    : 'calendar_id='+event.id+'&title='+event.title+'&start_date='+start,
            dataType: 'JSON',
            beforeSend: function()
            {
            },
            success: function(data)
            {
              if(data.status)
              {   
                $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
              }
              else
              {
                $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
              }

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
            }         
          });
        }

        function save()
        {
          $('#form_create').submit(function(){
            var element = $(this);
            var eventData;
            $.ajax({
              url     : backend_url+'calendar/save',
              type    : element.attr('method'),
              data    : element.serialize(),
              dataType: 'JSON',
              beforeSend: function()
              {
                element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
              },
              success: function(data)
              {
                if(data.status)
                {   
                  eventData = {
                    id          : data.id,
                    title       : $('#create_modal input[name=title]').val(),
                    description : $('#create_modal textarea[name=description]').val(),
                    start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                  // end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                  color       : $('#create_modal select[name=color]').val()
                };
                            $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                          }
                          else
                          {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                          }
                          element.find('button[type=submit]').html('Submit');
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                          element.find('button[type=submit]').html('Submit');
                          element.find('.alert').css('display', 'block');
                          element.find('.alert').html('Wrong server, please save again');
                        }         
                      });
            return false;
          })
        }

        function deteil(event)
        {
          $('#create_modal input[name=calendar_id]').val(event.id);
          $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
        // $('#create_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD'));
        $('#create_modal input[name=title]').val(event.title);
        $('#create_modal textarea[name=description]').val(event.description);
        $('#create_modal select[name=color]').val(event.color);
        $('#create_modal .delete_calendar').show();
        $('#create_modal').modal('show');
      }

      function editData(event)
      {
        $('#form_create').submit(function(){
          var element = $(this);
          var eventData;
          $.ajax({
            url     : backend_url+'calendar/save',
            type    : element.attr('method'),
            data    : element.serialize(),
            dataType: 'JSON',
            beforeSend: function()
            {
              element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
            },
            success: function(data)
            {
              if(data.status)
              {   
                event.title         = $('#create_modal input[name=title]').val();
                event.description   = $('#create_modal textarea[name=description]').val();
                event.start         = moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                // event.end           = moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                event.color         = $('#create_modal select[name=color]').val();
                $('#calendarIO').fullCalendar('updateEvent', event);

                $('#create_modal').modal('hide');
                element[0].reset();
                $('#create_modal input[name=calendar_id]').val(0)
                $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
              }
              else
              {
                element.find('.alert').css('display', 'block');
                element.find('.alert').html(data.notif);
              }
              element.find('button[type=submit]').html('Submit');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              element.find('button[type=submit]').html('Submit');
              element.find('.alert').css('display', 'block');
              element.find('.alert').html('Wrong server, please save again');
            }         
          });
          return false;
        })
      }

      function deleteData(event)
      {
        $('#create_modal .delete_calendar').click(function(){
          $.ajax({
            url     : backend_url+'calendar/delete',
            type    : 'POST',
            data    : 'id='+event.id,
            dataType: 'JSON',
            beforeSend: function()
            {
            },
            success: function(data)
            {
              if(data.status)
              {   
                $('#calendarIO').fullCalendar('removeEvents',event._id);
                $('#create_modal').modal('hide');
                $('#form_create')[0].reset();
                $('#create_modal input[name=calendar_id]').val(0)
                $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
              }
              else
              {
                $('#form_create').find('.alert').css('display', 'block');
                $('#form_create').find('.alert').html(data.notif);
              }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              $('#form_create').find('.alert').css('display', 'block');
              $('#form_create').find('.alert').html('Wrong server, please save again');
            }         
          });
        })
      }

    </script>
