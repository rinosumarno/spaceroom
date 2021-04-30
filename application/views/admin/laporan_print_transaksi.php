<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
 <style type="text/css">
   .table-data{
     width: 100%;
     border-collapse: collapse;
   }
   .table-data tr th,
   .table-data tr td{
     border:1px solid black;
     font-size: 10pt;
   }
 </style>

 <h3>Laporan Booking</h3>
 <table>
  <tr>
   <td>Dari Tgl</td>
   <td>:</td>
   <td><?php echo date('d/m/Y',strtotime($_GET['dari'])); ?></td>
 </tr>
 <tr>
   <td>Sampai Tgl</td>
   <td>:</td>
   <td><?php echo date('d/m/Y',strtotime($_GET['sampai'])); ?></td>
 </tr>
</table>

<br/>
<table class="table-data">
  <thead>
   <tr>
     <th style="text-align: center;">No</th>
     <th style="text-align: center;">Kode Booking</th>
     <th style="text-align: center;">Nama User</th>
     <th style="text-align: center;">Email</th>
     <th style="text-align: center;">Jam Booking</th>
     <th style="text-align: center;">Tanggal</th>
     <th style="text-align: center;">No Telepon</th>
     <th style="text-align: center;">Alamat</th>
     <th style="text-align: center;">Status Booking</th>
   </tr>
 </thead>
 <tbody>
   <?php
   $no = 1;
   foreach($laporan as $p){
     ?>
     <tr>
       <td style="text-align: center;"><?php echo $no++;?></td>
       <td style="text-align: center;"><?php echo $p->id_booking;?></td>
       <td style="text-align: center;"><?php echo $p->nama; ?></td>
       <td style="text-align: center;"><?php echo $p->email; ?></td>
       <td style="text-align: center;"><?php echo $p->jam; ?></td>
       <td style="text-align: center;"><?php echo $p->tgl; ?></td>
       <td style="text-align: center;"><?php echo $p->notelp; ?></td>
       <td style="text-align: center;"><?php echo $p->almt; ?></td>
       <td style="text-align: center;"><?php echo $p->status; ?></td>
     <?php } ?>
   </tbody>
 </table>

 <script type="text/javascript">
   window.print();
 </script>

</body>
</html>
