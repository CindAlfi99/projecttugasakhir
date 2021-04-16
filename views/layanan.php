<?php require 'template/header.php';
require '../config/config.php';
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM laundry_satuan WHERE id = $id");

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
<?php while($row = mysqli_fetch_assoc($query)):?>
<div class="col-md-6"><img src="<?= BASE_URL; ?>asset/img/<?= $row['gambar'];?>" width="100" heigth="100"alt=""></div>
<div class="col-md-6"><h3>Apa itu Laundry <?= $row['nama_layanan']; ?></h3></div>
<?php endwhile;?>
</div>
</div>