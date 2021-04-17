<?php require 'template/header.php'; ?>
<br>
<br>
<br>
<br>
<div class="container mt-5">
<div class="row ">
<div class="col-md-5">
<h1>Ingin Order ?</h1><p>Jika konsumen ingin melakukan pengorderan silahkan isi form pemesanan di samping dan konfirmasikan melalui kontak Admin di bawah. Pastikan Nomor Hp yang dicantumkan sama pada Nomor Hp saat melakukan konfirmasi. Dan cek kembali nomor resi dengan benar agar segera diproses. <br><br>
<img src="<?= BASE_URL; ?>asset/img/lokasi.png" width="23" height="23"alt="">  Jl. May Zen, Sei Selincah 
<br> <br>
<img src="<?= BASE_URL;?>asset/img/email.png" width="23" height="23" alt="">  acindi38@gmail.com
<br><br>
<img src="<?= BASE_URL;?>asset/img/phone-call.png" width="25" height="25" alt="">   0821-4372-2233 (<i>Hanya melakukan konfirmasi No.resi dan cek nomor</i>) </p>
</div>
<div class="col-md-6">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Nama</label>
      <input type="nama" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label for="">Email</label>
      <input type="email" class="form-control" id>
    </div>

  <div class="form-group col-md-6">
      <label for="">No.Telp (WA)</label>
      <input type="number" class="form-control" id>
    </div>

 
  <div class="form-group col-md-6">
    <label for="inputAddress2 col-md-6">Alamat Penjemputan</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-group col-md-6">
      <label for="inputState">Layanan</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>Kiloan</option>
        <option>Satuan</option>
        <option>Karpet</option>
        <option>Sepatu</option>
      </select>
    </div>
   
    </div>
  
  <button type="submit" class="btn btn-primary">Order Sekarang</button>
</form>
</div>
</div>
</div>

<?php require 'template/footer.php';?>