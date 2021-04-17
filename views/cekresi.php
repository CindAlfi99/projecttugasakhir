<?php require 'template/header.php';
?>
<br>
<br>
<br>

<!-- cek resi -->
<div class="container mt-5">
<div class="row ">
<div class="col-md-6">Lacak <i>status cucian</i> Anda sesuai dengan Nomor Resi yang diberikan pada saat pengorderan. Pastikan Anda sudah mengkonfirmasikan Nomor Resi dengan Admin. Jika belum silahkan konfirmasi terlebih dahulu di kontak bawah.
</div>
<div class="col-md-6">
<img src="<?= BASE_URL; ?>asset/img/scale.png" class="img-fluid" alt="">
  </div>
</div>
<div class="row"><div class="col-md-4"><form>
  <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" autofocus placeholder="Masukkan Nomor Resi"  aria-describedby="emailHelp">
  </div><button type="submit" class="btn btn-primary">Cek Resi</button>
</form></div></div>
</div>
<?php require 'template/footer.php';?>