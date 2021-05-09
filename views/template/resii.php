<?php
$keyword = $_GET['keyword'];
$db = mysqli_connect('localhost','root','','rumahlaundry381');
$result =mysqli_query($db, "SELECT * FROM order_masuk WHERE no_resi = '$keyword'");

$row = mysqli_fetch_assoc($result);
    $rows[] = $row;
    // cek seluruh data mahasiswa
    
    
    ?>

      <div class="container">
        <?php if(mysqli_num_rows($result) > 0){?>
    <div class="col-md-12"><h1 class="text-center"><b>Rumah Laundry 381</b></h1><br>
 </div>
</div>
<div class="row bg-light">
<div class="col-md-6 mx-auto">
<label for="text"><b>Nomor Resi</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['no_resi']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto">
<label for="text"><b>Nama</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['nama_pemesan']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto">
<label for="text"><b>Status</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['status']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto">
<label for="text"><b>Tanggal Masuk</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['tanggal_pesan']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto">
<label for="text"><b> Perkiraan Selesai</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['tanggal_selesai']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto">
<label for="text"><b> Jenis Layanan</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['jenis_layanan']?>" placeholder="Default input"></div>

<div class="col-md-6 mx-auto">
<label for="text"><b> Jenis Item</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['jenis_item']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto">
<label for="number"><b> Jumlah</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['jumlah']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto">
<label for="text"><b> Satuan</b></label><br>
<input class="form-control" type="text" value="<?= $rows[0]['satuan']?>" placeholder="Default input"></div>
<div class="col-md-6 mx-auto"> 
<label for="text"><b> Harus Dibayar</b></label><br>
<input class="form-control" type="number" value="123" placeholder="Default input"></div>

</div>
<div class="row mt-3 ml-1">
<p class="text-center">Terimakasih telah melakukan pemesanan. Mohon bersabar menunggu, </p>
<p>Salam Rumah Laundry 381</p>
</div>

    <?php }else { ?>
    <div class="row">
    <div class="col-md-6">
   <div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Gagal cek!</strong> Periksa kembali nomor resi anda.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div></div>
    <?php } ?>
  