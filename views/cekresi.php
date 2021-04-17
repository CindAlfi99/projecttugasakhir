<?php require 'template/header.php';
?>
<br>
<br>
<br>

<!-- cek resi -->
<div class="container mt-5">
<div class="row ">
<div class="col-md-6">Lacak <i>status cucian</i> Anda sesuai dengan nomor resi yang diberikan pada saat pemesanan. Pastikan Anda sudah melakukan konfirmasi nomor resi pada Admin. Jika belum silakan konfirmasi terlebih dahulu di kontak bawah ini.
</div>
<div class="col-md-5">
<img src="<?= BASE_URL; ?>asset/img/laundry-satuan.png" width="100" height="100" alt="">
  </div>
</div>
<div class="row"><div class="col-md-6"><form>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" autofocus placeholder="Masukkan Nomor Resi"  aria-describedby="emailHelp">
  </div><button type="submit" class="btn btn-primary">Cek Resi</button>
</form></div></div>
</div>
<?php require 'template/footer.php';?>