<?php require 'template/header.php';
$query = mysqli_query($connection, "SELECT * FROM order_masuk WHERE DATE(tanggal_pesan) = CURDATE()");
?>


<div class="container">
<!-- search -->
<div class="row">
<div class="col-md-5">
<div class="form-group mb-3">
    <input type="text" class="form-control" id="cari" placeholder="cari" autofocus autocomplete="off">
  </div>
</div></div>
<div class="row">
<h5 class="ml-3 mb-3">Data Konsumen Hari Ini</h5>
<div class="col-md-12">
<table class="table table-striped text-center">
  <thead>
    <tr>
   
      <th scope="col">No</th>
      <th scope="col">Nama Konsumen</th>
      <th scope="col">Nomor WA</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Layanan</th>
      <th scope="col">Jenis Item</th>
      <th scope="col">Tanggal Pesan</th>
      <th scope="col">Tanggal Selesai</th>
      <th scope="col">Opsi</th>
    </tr>
   
  </thead>
  <tbody>
  <?php
  $i = 1;
   while($row = mysqli_fetch_assoc($query)):?>
    <tr>
      <th scope="row"><?= $i++;?></th>
      <td><?=$row['nama_pemesan'];?></td>
      <td><?=$row['no_wa'];?></td>
      <td><?=$row['alamat_jemput'];?></td>
      <th><?=$row['jenis_layanan'];?></th>
      <td><?=$row['jenis_item'];?></td>
      <td><?=$row['tanggal_pesan'];?></td>
      <td><?=$row['tanggal_selesai'];?></td>
      
      <th>Edit | Hapus</th>
      <?php  endwhile;?>
    </tr>
  
  </tbody>
</table>
</div>
</div>
</div>

 <?php require 'template/footer.php';?>