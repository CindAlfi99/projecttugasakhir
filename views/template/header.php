<?php
//  require '../../config/base_url.php'; 
// require '../../config/config.php';
require '../config/config.php';
require '../config/base_url.php'; 
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
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
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>views/layanansatuan.php">Laundry Satuan</a>
          <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>views/layanankiloan.php">Laundry Kiloan</a>
          <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>views/layanankarpet.php">Laundry Karpet</a>
          <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>views/layanansepatu.php">Laundry Shoes</a>
      </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?= BASE_URL;?>views/cekresi.php">Cek Resi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?= BASE_URL;?>views/order.php" tabindex="-1" aria-disabled="true">Pemesanan</a>
        </li>

      </ul>

    </div>
   
  </div>
</nav>
<!-- Optional JavaScript; choose one of the two! -->
</section>
