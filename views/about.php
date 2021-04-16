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
    <?php while($row = mysqli_fetch_assoc($query)):?>
    <div class="col-md-4 kotak">
   
    <img src="<?= BASE_URL; ?>asset/img/<?= $row['gambar'];?>" class="img-fluid bg-primary rounded-circle" alt="">
    <p>Laundry <?= $row['nama_layanan']?></p><br>
    <p><?= $row['deskripsi']?></p><a href="<?= BASE_URL;?>views/layanan.php?id=<?=$row['id']; ?>" class="btn btn-light">Detail</a>
   
    
    </div>
    <?php endwhile;?>
    </div>
 
    <!-- batas -->
    </div>
    <?php require 'template/footer.php';?>

</body>
</html>

  