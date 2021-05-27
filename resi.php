<?php
$keyword = $_GET['keyword'];
$db = mysqli_connect('localhost', 'root', '', 'rumahlaundry381');
$result = mysqli_query($db, "SELECT * FROM order_masuk WHERE no_resi = '$keyword'");

$row = mysqli_fetch_assoc($result);
$rows[] = $row;
?>

<?php if (mysqli_num_rows($result) > 0) { ?>
  <div class="container">
    <div class="col-md-12">
      <h1 class="text-center"><b>Rumah Laundry 381</b></h1><br>
    </div>
    <div class="row bg-light">
      <div class="col-md-6 mx-auto">
        <label for="text"><b>Nomor Resi</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['no_resi'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b>Nama</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['nama_pemesan'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b>Status Cucian</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['status_cucian'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b>Status Pembayaran</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['status_pembayaran'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b>Tanggal Masuk</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['tanggal_pesan'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b> Perkiraan Selesai</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['tanggal_selesai'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b> Jenis Layanan</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['jenis_layanan'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b> Jenis Item</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['jenis_item'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="number"><b> Jumlah</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['jumlah'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6 mx-auto">
        <label for="text"><b> Satuan</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['satuan'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6">
        <label for="text"><b>Mode Pesan</b></label><br>
        <input class="form-control" type="text" value="<?= $rows[0]['mode'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="col-md-6">
        <label for="text"><b> Harus Dibayar</b></label><br>
        <input class="form-control" type="number" value="<?= $rows[0]['total_bayar'] ?>" placeholder="Default input" disabled>
      </div>
      <div class="mt-3 ml-1">
        <p class="text-center">Terimakasih telah melakukan pemesanan. Mohon bersabar menunggu, </p>
        <p>Salam Rumah Laundry 381</p>
      </div>
    </div>
  </div>
<?php } else { ?>
  <div class='alert alert-danger alert-dismissible fade show mt-4' role='alert'>
    <strong>Gagal!</strong> Nomor resi yang Anda masukkan tidak terdaftar.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php } ?>