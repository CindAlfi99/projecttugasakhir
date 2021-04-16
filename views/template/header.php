<?php require 'base_url.php'; 

require 'config.php';

$query = mysqli_query($con, "SELECT * FROM laundry_satuan");?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASE_URL; ?>asset/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASE_URL; ?>asset/css/landing.css">

    <title>Rumah Laundry 381</title>
  </head>
  <body>
  

    <section id="id">

<nav class="navbar navbar-expand-lg navbar-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?= BASE_URL; ?>views/index.php"><span>R'L381</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="<?= BASE_URL; ?>views/index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL; ?>views/about.php">Tentang Kami</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Layanan
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
        <?php while($row = mysqli_fetch_assoc($query)):?>
          <li><a class="dropdown-item" href="<?= BASE_URL;?>views/layanan.php?id=<?=$row['id']; ?>"><?= $row['nama_layanan']; ?></a></li>
          <?php endwhile;?>
        </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Layanan</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="">Cek Resi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Pemesanan</a>
        </li>

      </ul>

    </div>
   
  </div>
</nav>
<!-- Optional JavaScript; choose one of the two! -->
</section>