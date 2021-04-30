<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>


 <h3>Laporan Data Photo Studio</h3>
 <br/>
 <?php
 $no = 1;
 foreach($peminjaman as $b){
   ?>
  
   <br>
   <div class="x_content">
     <div class="row" >
       <div class="col-sm-3 col-md-11">
         <div class="thumbnail" style="margin-left:100px; ">
           <img src="<?php echo base_url();?>assets/upload/<?php echo $b->gambar; ?>" style="max-width:100%; max-height: 100%; height: 150px; width: 150px">
           <div class="caption">
            
            <center><a style="font-size: 20px" class="btn btn-lg btn-warning">Bank Mandiri
            <h3 style="font-size: 20px"> A/n : MARI PS
            <h3 style="font-size: 20px">Nomor Rekening : 133-0873-6437-13-0</h3></center></a>
            <br>

             <table style="position: center;" class="table table-triped">

               <tr>
                 <td style="font-size: 18px;">Nama User : </td> <td style="font-size: 15px;"><?php echo $b->nama_user ; ?></td>
               </tr>

               <?php
      foreach ($peminjaman as $a) {
        ?>
               <tr>
                 <td style="font-size: 15px;">Alamat Email: </td>  <td style="font-size: 15px;"><?php echo $a->email ; ?></td>
               </tr>
               <?php } ?>
               <tr>
                 <td style="font-size: 15px;">Nama Paket: </td> <td style="font-size: 15px;"><?php echo $b->nama_paket; ?></td>
               </tr>
                <tr>
                 <td style="font-size: 15px;">Kode Booking: </td> <td style="font-size: 15px;"><?php echo $b->id_booking; ?></td>
               </tr>
                <tr>
                 <td style="font-size: 15px;">Tanggal: </td> <td style="font-size: 15px;"><?php echo $b->tgl; ?></td>
               </tr>
                <tr>
                 <td style="font-size: 15px;">Jam Booking: </td> <td style="font-size: 15px;"><?php echo $b->jam; ?></td>
               </tr>
               
               <tr>
                 <td style="font-size: 15px;">Harga: </td><td style="font-size: 15px;"><?php echo $b->harga; ?></td>
               </tr>
               <tr>
                 <td style="font-size: 15px;">Notelp: </td><td style="font-size: 15px;"><?php echo $b->notelp; ?></td>
               </tr>
                <tr>
                 <td style="font-size: 15px;">Alamat: </td> <td style="font-size: 15px;"><?php echo $b->almt; ?></td>
               </tr>
             </table>
             <?php } ?>
           </div>
         </div>
       </div>
     </div>
   </div>
   <td align="right">


     <center><a class="btn btn-lg btn-success" href="<?php echo base_url().'member/konfirmasibayar/'?>" onclick="return confirm('Anda akan dialihkan ke Konfirmasi Pembayaran !');"><span class="glyphicon glyphicon-delete "></span>Konfirmasi Pembayaran</a> </center>
   </td>
<center><h3 style="color: red;" >Note : Batas waktu pembayaran berlaku 2 Jam ! </h3></center>
<center><h3 style="color: red;" >*Harap Menyimpan ScreenShoot Bukti Pembayaran & Segera Melakukan Konfirmasi Pembayaran ! </h3></center>
   <script type="text/javascript">
     window.print();
   </script>

 </body>
 </html>
 
