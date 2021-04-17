<?php require '../template/header.php';



?>
<!-- slideshow -->
<br>
<br>
<br>
<br>
<br>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?= BASE_URL; ?>asset/img/laundry-satuan.png" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= BASE_URL; ?>asset/img/laundry-satuan.png" class="d-block w-50" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?= BASE_URL; ?>asset/img/laundry-satuan.png" class="d-block w-50" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- batas -->

<div class="row mt-5">

<div class="col-md-6"><img src="<?= BASE_URL; ?>asset/img/scale.png" width="300" heigth="100"alt=""></div>
<div class="col-md-6"><h3>Apa itu Laundry Kiloan</h3>
<p><i>Laundry</i> kiloan merupakan layanan laundry yang pakaian yang proses dan transaksinya dilakukan dengan menghitung berat item laundry dari pakaian customer.</p></div>

</div>

<!-- batas -->
<!-- promo -->
<div class="row promo mt-5">
<div class="col-md-5"> <img src="<?= BASE_URL; ?>asset/img/scale.png" width="300" heigth="100">
</div>
<div class="col-md-7"><h2>PROMO ! Cuci 3KG DISKON Rp 4.000 /kg</h2><p class="mt-3">Jangan lewatkan <i>promo</i> hari ini dengan mencuci 3KG <b>DISKON</b> Rp 4.000 /kg. Penawaran terbatas!! Ayo pesan sekarang!</p><br>
<button type="button" class="btn btn-outline-warning mt-2 rounded-pill p-4">Ambil Sekarang!</button>
</div>
</div>
<!-- batas -->
<div class="row">
<div class="col-md-11">
<h3 class="text-center font-weight-bold mt-5">Price List Laundry Kiloan</h3>
</div>
</div>
<div class="row mt-5 text-center">
<!-- harga 1 -->
<div class="col-md-3 m-4">
<img src="<?= BASE_URL;?>asset/img/rupiah.png" width="30" height="30">
<span style="font-size:50px;"> 6.000</span> /kg <hr>Etimasi selesai:  48 Jam <br>
 <button type="button" class="btn btn-outline-primary mt-5 rounded-pill p-2">Pesan Laundry</button>
</div>
<!-- harga 2 -->
<div class="col-md-3 m-4">
<img src="<?= BASE_URL;?>asset/img/rupiah.png" width="30" height="30">
<span style="font-size:50px;"> 10.000</span> /kg <hr>Etimasi selesai:  24 Jam <br>
 <button type="button" class="btn btn-outline-primary mt-5 rounded-pill p-2">Pesan Laundry</button>
</div>
<!-- harga 3 -->
<div class="col-md-3 m-4">
<img src="<?= BASE_URL;?>asset/img/rupiah.png" width="30" height="30">
<span style="font-size:50px;"> 15.000</span> /kg <hr>Etimasi selesai:  12 Jam <br>
 <button type="button" class="btn btn-outline-primary mt-5 p-2 rounded-pill">Pesan Laundry</button>
</div>
<!-- harga 4 -->
<div class="col-md-3 m-4">
<img src="<?= BASE_URL;?>asset/img/rupiah.png" width="30" height="30">
<span style="font-size:50px;"> 17.000</span> /kg <hr>Etimasi selesai:  6 Jam <br>
 <button type="button" class="btn btn-outline-primary mt-5 rounded-pill p-2">Pesan Laundry</button>
</div>
<!-- harga 5 -->
<div class="col-md-3 m-4">
<img src="<?= BASE_URL;?>asset/img/rupiah.png" width="30" height="30">
<span style="font-size:50px;"> 5.000</span> /kg <hr>Cuci Kering <br>
 <button type="button" class="btn btn-outline-primary mt-5 p-2 rounded-pill">Pesan Laundry</button>
</div>
<!-- harga 6 -->
<div class="col-md-3 m-4">
<img src="<?= BASE_URL;?>asset/img/rupiah.png" width="30" height="30">
<span style="font-size:50px;"> 5.000</span> /kg <hr>Setrika <br>
 <button type="button" class="btn btn-outline-primary mt-5 p-2 rounded-pill">Pesan Laundry</button>
</div>
<!-- harga 7 -->
<div class="col-md-3 m-4">
<img src="<?= BASE_URL;?>asset/img/rupiah.png" width="30" height="30">
<span style="font-size:50px;"> 20.000</span> /kg <hr>Laundry Express (5 Jam) <br>
 <button type="button" class="btn btn-outline-primary p-2 mt-5 rounded-pill">Pesan Laundry</button>
</div>



</div>
<!-- batas -->
</div>
<?php require '../template/footer.php';?>