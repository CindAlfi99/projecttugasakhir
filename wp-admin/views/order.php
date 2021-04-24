<?php require 'template/header.php';
$query = mysqli_query($connection, "SELECT * FROM order_masuk");?>
<div class="container">

<div class="row">
<div class="col-md-5 mb-3"> 
  <div class="form-group  mb-2">
    <input type="text" class="form-control" id="cari" placeholder="cari" autofocus autocomplete="off" >
  </div>
  </div>
  </div>
 <div class="row">
 <h5 class="ml-3">Data Order</h5>
 <div class="col-md-12">
 <div id="container">
 <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor Resi</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Total Pembayaran</th>
      <th scope="col">Tanggal Selesai</th>
      <th scope="col">Proses</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
   while($row = mysqli_fetch_assoc($query)):?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td><?=$row['no_resi'];?></td>
      <th><?=$row['tanggal_pesan'] ?></th>
      <td><?=$row['nama_pemesan'] ?></td>
      <th><?=$row['total_bayar'] ?></th>
      <th><?=$row['tanggal_selesai'] ?></th>
      <th><?=$row['proses'] ?></th>
      <td></td>
    </tr>
<?php  endwhile;?>
  </tbody>
</table>
</div>
</div>
</div>
</div>

 <?php require 'template/footer.php';?>