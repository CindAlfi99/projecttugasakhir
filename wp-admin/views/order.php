<?php require 'template/header.php';
$query = mysqli_query($connection, "SELECT * FROM order_masuk");
?>
<div class="container">

  <div class="row">
    <div class="col-md-5 mb-3">
      <div class="form-group  mb-2">
        <input type="text" class="form-control" id="cari" placeholder="cari" autofocus autocomplete="off">
      </div>
    </div>
  </div>
  <div class="row">
    <h5 class="ml-3">Data Order</h5>
    <div class="col-md-12">
      <div id="container">
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
            while ($row = mysqli_fetch_assoc($query)) : ?>
              <tr>
                <td scope="row"><?= $i++ ?></td>
                <td><?= $row['no_resi']; ?></td>
                <td><?= $row['tanggal_pesan'] ?></td>
                <td><?= $row['nama_pemesan'] ?></td>
                <td><?= $row['total_bayar'] ?></td>
                <td><?= $row['tanggal_selesai'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>
                  <?php
                  if ($row['status'] === 'jemput') {
                  ?>
                    <a href="status.php?id=<?= $row['id'] ?>&status=proses" class="btn btn-outline-warning">Proses</a>
                  <?php } elseif ($row['status'] === 'proses') {?>
                    <a href="status.php?id=<?= $row['id'] ?>&status=selesai" class="btn btn-outline-warning">Selesai</a>
                  <?php } elseif ($row['status'] === 'selesai') {?>
                    <a href="status.php?id=<?= $row['id'] ?>&status=lunas" class="btn btn-outline-warning">Lunas</a>
                  <?php } ?>
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php require 'template/footer.php'; ?>