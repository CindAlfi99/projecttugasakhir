<?php require 'template/header.php';
require 'functions.php';
$query = mysqli_query($connection, "SELECT * FROM order_masuk WHERE DATE(tanggal_pesan) = CURDATE()");
if(isset($_POST['submit'])){
  if(ubahProduk($_POST) > 0){
    echo "<script> alert('Data berhasil diubah');
    document.location.href ='customer.php'; </script>";
  }else{
    echo "<script> alert('Data gagal diubah!');
    document.location.href ='customer.php'; </script>";
  }
}
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
<div class="col-md-10">
<div class="containe" id="containe">
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
   foreach($query as $row):?>
    <tr>
      <th scope="row"><?= $i++;?></th>
      <td><?=$row['nama_pemesan'];?></td>
      <td><?=$row['no_wa'];?></td>
      <td><?=$row['alamat_jemput'];?></td>
      <th><?=$row['jenis_layanan'];?></th>
      <td><?=$row['jenis_item'];?></td>
      <td><?=$row['tanggal_pesan'];?></td>
      <td><?=$row['tanggal_selesai'];?></td>
      <th><a type="submit" class="btn btn-primary" id="tombolUbah"data-id="<?= $row['id']?>" data-nama="<?= $row['nama_pemesan']?>" data-wa="<?= $row['no_wa']?>" data-alamat="<?= $row['alamat_jemput']?>" data-layanan="<?= $row['jenis_layanan']?>" data-item="<?= $row['jenis_item']?>" data-pesan="<?= $row['tanggal_pesan']?>" data-selesai="<?= $row['tanggal_selesai']?>" height="50px" data-toggle="modal" data-target="#edit">
  Edit
</a></th>
      <?php endforeach;?>
    </tr>
  
  </tbody>
</table>
</div>

</div>
</div>
</div>

<!-- modal edit -->
 <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Ubah Data</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
      <div class="form-group">
    <input type="hidden" class="form-control" name="id" id="id" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="nama_pemesan">Nama Pemesan </label>
    <input type="text" class="form-control" name="nama_pemesan" id="nama_pemesan" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="no_wa">No_Wa</label>
    <input type="text" class="form-control" name="no_wa" id="no_wa" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="alamat_jemput">alamat Jemput</label>
    <input type="text" class="form-control" name="alamat_jemput" id="alamat_jemput" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="jenis_layanan">Jenis Layanan</label>
    <input type="text" class="form-control" name="jenis_layanan" id="jenis_layanan" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="jenis_item">Jenis Item</label>
    <input type="text" class="form-control" name="jenis_item" id="jenis_item" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="tgl_pesan">Tanggal Pesan</label>
    <input type="text" class="form-control" name="tgl_pesan" id="tgl_pesan" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="tgl_selesai">Tanggal Selesai</label>
    <input type="text" class="form-control" name="tgl_selesai" id="tgl_selesai" aria-describedby="emailHelp">
  </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="ubah" class="btn btn-primary">Update</button>
      </div>
    </div>
    </form>
  </div>
</div>

 <?php require 'template/footer.php';?>