<?php

require 'config/config.php';
require 'config/base_url.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= BASE_URL; ?>asset/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= BASE_URL; ?>asset/css/landing.css">

  <title>Rumah Laundry 381</title>
</head>

<body>
  <section id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL; ?>index.php"><span>R'L381</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="<?= BASE_URL; ?>index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL; ?>about.php">Tentang Kami</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?= BASE_URL; ?>layanansatuan.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Layanan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>layanansatuan.php">Laundry Satuan</a>
                <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>layanankiloan.php">Laundry Kiloan</a>
                <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>layanankarpet.php">Laundry Karpet</a>
                <a class="dropdown-item bg-dark" href="<?= BASE_URL; ?>layanansepatu.php">Laundry Shoes</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="<?= BASE_URL; ?>cekresi.php">Cek Resi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= BASE_URL; ?>order.php" tabindex="-1" aria-disabled="true">Pemesanan</a>
            </li>

          </ul>

        </div>

      </div>
    </nav>
    <!-- Optional JavaScript; choose one of the two! -->
  </section>