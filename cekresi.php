<?php require 'template/header.php'; ?>
<!-- cek resi -->
<div class="container my-5 pt-5">
  <div class="row">
    <div class="col-md-6 d-flex align-self-center">
      <p>
      Lacak status cucian Anda sesuai dengan nomor resi yang diberikan pada saat pemesanan. Pastikan Anda sudah melakukan konfirmasi nomor resi pada Admin. Jika belum silakan konfirmasi terlebih dahulu di kontak bawah ini.
      </p>
    </div>
    <div class="col-md-6 d-flex justify-content-center" style="height: 200px">
      <img src="<?= BASE_URL; ?>asset/img/laundry-satuan.png" alt="" height="100%">
    </div>
  </div>
  
  <div id="alert"></div>

  <div class="row pt-4 justify-content-md-center">
    <div class="col-md-6 text-center">
      <div class="form-group">
        <label for="no-resi"><strong>Silakan Cek nomor resi Anda</strong></label>
        <input id="no-resi" type="number" class="form-control" autofocus placeholder="Masukkan no resi Anda" aria-describedby="resiHelp" name="no_resi">
      </div>
      <button class="btn btn-primary" id="tombol-cari">Cek Resi</button>
    </div>
  </div>
</div>

<?php require 'template/footer.php'; ?>