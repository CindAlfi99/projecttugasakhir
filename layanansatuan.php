<?php require 'template/header.php';
$query = mysqli_query($conn, "SELECT * FROM layanan");?>



<!-- slideshow -->
<br>
<br>
<br>
<br>
<br>
<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= BASE_URL; ?>asset/img/slide.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= BASE_URL; ?>asset/img/slide.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?= BASE_URL; ?>asset/img/slide.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- batas -->

<div class="row mt-3">

<!-- <div class="col-md-6"><img src="<?= BASE_URL; ?>asset/img/scale.png" width="150" heigth="90"alt=""></div> -->
<div class="col-md-6"><h3>Apa itu Laundry Satuan ?</h3>
<p><i>Laundry</i> satuan merupakan penanganan laundry khusus, dikerjakan secara manual dan satu per satu akan ditangani oleh ahlinya.<br>
<h5>Kelebihan : </h5>
<h4><img src="<?= BASE_URL;?>asset/img/point.png" width="20" height="20"> 1 Item per Proses</h4><p>Pengerjaan 1 item setiap per proses, sehingga penanganan premium.</p>
<h4><img src="<?= BASE_URL;?>asset/img/point.png" width="20" height="20"> Tidak Menggunakan Mesin</h4><p>Pengerjaan dilakukan secara manual, sama sekali tidak menggunakan mesin.</p></p><h4><img src="<?= BASE_URL;?>asset/img/point.png" width="20" height="20"> Menggunakan Bahan Khusus</h4><p>Rumah Laundry 381 menggunakan chemical khusus untuk penanganan Laundry Satuan</p><a href="order.php"class="btn btn-outline-warning mt-2 rounded-pill p-4">Pesan Sekarang!</a></div>

</div>
<!-- daftar harga -->
<div class="row mt-3 text-center">
<div class="col-md-12"><h3 class="font-weight-bold mt-5 mb-5">List Harga Laundry Satuan</h3></div>


<!-- batas table -->
<div class="row  mx-auto">
<div class="col-12">
<table class="table table-striped" id="lay">
  <thead class="bg-primary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Item</th>
      <th scope="col">Harga</th>
     
    </tr>
  </thead>
  <tbody>
  
<?php $i = 1;
 while($row= mysqli_fetch_assoc($query)):?>
    <tr>
      <th scope="row"><?= $i++;?></th>
      <td><?= $row['jenis_item'] ?></td>
      <td><?= $row['harga'];?></td>
  
    </tr>
    <?php endwhile; ?>
   
  </tbody>
</table>
</div>
</div>

</div>
<br>
<h6>Notes :</h6> <ul>
<li>Harga < 20.000 tidak diberi hanger
</li>
<li>Semua sudah termasuk cover</li>
</ul>
</div>
<!-- batas -->
<?php require 'template/footer.php';?>