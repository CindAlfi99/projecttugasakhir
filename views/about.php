<?php require 'template/header.php';
 require '../config/config.php';
 $query = mysqli_query($con, "SELECT * FROM laundry_satuan"); 
 ?>

    <div class="container">
    <div class="row">
    <div class="col-md-6 mt-5"><h2>Rumah Laundry 381</h2>
    <p>Rumah Laundry 381 memiliki fitur dan sistem yang terintergrasi secara <i>online</i> dan sangat memprioritaskan kemudahan customers dalam menggunakan jasa dan fitur kami sepraktis mungkin. Serta berfokus pada kebutuhan dan kepuasaan pelanggan ketika menggunakan jasa Laundry kami.</p><br><p>
   Rumah Laundry mulai merintis bisnis ini pada tahun 2017 dengan layanan pertama yaitu <i>Laundry</i> Kiloan dan satuan.</p><br><p>Pada tahun 2018 layanan Rumah Laundry 381 bertambah membuka layanan Laundry Karpet dan bedcover.</p><br>

<p>Di tahun 2019 Rumah Laundry 381 mulai menambahkan lagi layanan Laundry Shoes yang  layanannya dikhususkan untuk membersihkan dan merawat sepatu customer sampai saat ini.</p><hr></div>
    <div class="col-md-6"><img src="<?= BASE_URL;?>asset/img/logo.png" alt="">
</div>
    </div>
    <!-- misi dan visi laundry -->
    <div class="row mt-3">
    <div class="col-md-12"><h2>Visi</h2>
    "Menjadi perusahaan besar bidang jasa pencucian pakaian yang berorientasi pada kepuasan pelanggan."<br></div>
    </div>
    <div class="row mt-3">
    <div class="col-md-11">
    <h2>Misi</h2>
    1. Menyediakan Layanan yang cepat serta teknologi yang praktis untuk kebutuhan  customer sehari-hari.<br>
    2. Memberikan pengalaman terbaik demi mencapai Kepuasan Customer kami.<br>
    3. Menjadi Brand yang bisa diandalkan bagi masyarakat indonesia.
    </div>
    </div>
    <!-- batas -->
    <!-- layanan laundry -->
  
    <div class="row mt-5">
    <div class="col-md-11 text-center">
    <h2 class="text-center mb-3 mt-0 font-weight-bold">Layanan Rumah Laundry 381</h2>
    <p>Rumah Laundry 381 Memiliki beberapa fitur layanan yang dapat memenuhi kebutuhan anda.</p>
    </div>
    </div>
    
    <div class="row text-center">

    <div class="col-md-2 kotak">
   
    <img src="<?= BASE_URL; ?>asset/img/scale.png" class="img-fluid bg-primary rounded-circle" alt="">
    <p>Laundry Kiloan</p><br>
    <p><i>Laundry</i> kiloan merupakan layanan laundry yang pakaian yang proses dan transaksinya dilakukan dengan menghitung berat item laundry dari pakaian customer.</p><a href="<?= BASE_URL;?>views/layanan/layanankiloan.php" class="btn btn-light">Detail</a>
    </div>
    <div class="col-md-2 kotak">
   
   <img src="<?= BASE_URL; ?>asset/img/tshirt.png" class="img-fluid bg-primary rounded-circle" alt="">
   <p>Laundry Satuan</p><br>
   <p><i>Laundry</i> satuan merupakan penanganan laundry khusus, dikerjakan secara manual dan satu per satu akan ditangani oleh ahlinya.</p><a href="<?= BASE_URL;?>views/layanan.php" class="btn btn-light">Detail</a>
   </div>
   <div class="col-md-2 kotak">
   
   <img src="<?= BASE_URL; ?>asset/img/carpet.png" class="img-fluid bg-primary rounded-circle" alt="">
   <p>Laundry Karpet</p><br>
   <p>Layanan <i>Laundry</i> Karpet diproses dengan menggunakan mesin khusus sehingga bisa dipastikan kebersihannya satuan merupakan penanganan laundry khusus, dikerjakan secara manual dan satu per satu akan ditangani oleh ahlinya.</p><a href="<?= BASE_URL;?>views/layanan.php" class="btn btn-light">Detail</a>
   </div>
   <div class="col-md-2 kotak">
   
   <img src="<?= BASE_URL; ?>asset/img/running.png" class="img-fluid bg-primary rounded-circle" alt="">
   <p>Laundry Shoes</p><br>
   <p>Layanan <i>Laundry</i> Shoes merupakan jenis pelayanan laundry yang dikhususkan untuk pelayanan kebersihan dan perawatan Sepatu.</p><a href="<?= BASE_URL;?>views/layanan.php" class="btn btn-light">Detail</a>
   </div>
   <div class="col-md-2 kotak">
   
   <img src="<?= BASE_URL; ?>asset/img/cover.png" class="img-fluid bg-primary rounded-circle" alt="">
   <p>Laundry Bed Cover</p><br>
   <p>Jangan paksakan diri untuk mencuci sendiri bed cover Anda. Di Rumah Laundry 381, Laundry Bed Cover merupakan salah satu layanan favorit pelanggan Kami. Bersih, rapih, dan wangi.</p><a href="<?= BASE_URL;?>views/layanan.php" class="btn btn-light">Detail</a>
   </div>
   
  
    </div>
 
    <!-- batas -->
    </div>
    <?php require 'template/footer.php';?>



  