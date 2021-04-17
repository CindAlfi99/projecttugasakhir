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

<div class="col-md-6"><img src="<?= BASE_URL; ?>asset/img/running.png" width="300" heigth="100"alt=""></div>
<div class="col-md-6"><h3>Apa itu Laundry Shoes ?</h3>
<p>Layanan <i>Laundry</i> Shoes merupakan jenis pelayanan laundry yang dikhususkan untuk pelayanan kebersihan dan perawatan Sepatu.Dan berfokus pada 2 kategori layanan, yaitu <i>Fast Clean<i> dan <i>Deep Clean.</i></p><br>
<h3>Kategori Pelayanan :</h3>
<!-- tombol collapse -->

<p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Fast Clean
  </a>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Deep Clean
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>
<!-- batas -->
<button type="button" class="btn btn-outline-warning mt-2 rounded-pill p-4">Pesan Sekarang!</button>
</div>
</div>

<!-- daftar harga -->
<div class="row mt-5 text-center">
<div class="col-md-12"><h3 class="font-weight-bold mt-5 mb-5">List Harga Laundry Shoes</h3></div>
<!-- card -->
<div class="row mx-auto">
<div class="col-md-6"><div class="card" style="width: 18rem;">
  <img src="<?= BASE_URL; ?>asset/img/running.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Fast Clean</h5>
    <p class="card-text">Etimasi Pengerjaan: 1 Hari</p>
    <a href="#" class="btn btn-outline-primary p-2  rounded-pill">Pesan Luandy</a>
  </div>
</div>
</div>
<div class="col-md-6"><div class="card" style="width: 17rem;">
  <img src="<?= BASE_URL; ?>asset/img/running.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Deep Clean</h5>
    <p class="card-text">Etimasi Pengerjaan: 4 Hari</p>
    <a href="#" class="btn btn-outline-primary p-2  rounded-pill">Pesan Laundry</a>
  </div>
</div></div></div>
<!-- batas -->

</div>
</div>
<?php require '../template/footer.php';?>