<?php
$tombolCari = $_GET['tombolCari'];
$db = mysqli_connect('localhost','root','','rumahlaundry381');
$result =mysqli_query($db, "SELECT * FROM order_masuk WHERE no_resi LIKE '%$tombolCari%' OR nama_pemesan LIKE '%$tombolCari%' OR alamat_jemput LIKE '%$tombolCari%'");

$row = mysqli_fetch_assoc($result);
    $rows[] = $row;
    // cek seluruh data mahasiswa
    ?>
            <?php if(mysqli_num_rows($result) > 0){?>
    <table class="table table-striped text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor Resi</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Total Pembayaran</th>
      <th scope="col">Tanggal Selesai</th>
      <th scope="col">Proses</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 1;
   ?>
    <tr>
      <th scope="row"><?=$i++?></th>
      <td><?=$rows[0]['no_resi'];?></td>
      <td><?=$rows[0]['tanggal_pesan'] ?></td>
      <td><?=$rows[0]['nama_pemesan'] ?></td>
      <th><?=$rows[0]['total_bayar'] ?></th>
      <td><?=$rows[0]['tanggal_selesai'] ?></td>
      <td><?=$rows[0]['proses'] ?></td>
      <td></td>
    </tr>

  </tbody>
  </table>
  <?php }else{?>
  <p>Refresh Ulang</p>
  <?php }?>
  