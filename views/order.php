

<?php
 require 'template/header.php';

?>

    
<script>
function my_fun(str) {

if (window.XMLHttpRequest) {
xmlhttp = new XMLHttpRequest();
} else{
xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
}

xmlhttp.onreadystatechange= function(){
if (this.readyState==4 && this.status==200) {
    document.getElementById('item').innerHTML = this.responseText;
}
}
xmlhttp.open("GET","helper.php?value="+str, true);
xmlhttp.send();

}
   
</script>
<br>
<br>
<br>
<br>
<div class="container mt-5">
<div class="row ">
<div class="col-md-5">
<h1>Ingin melakukan pemesanan?</h1><p>Jika konsumen ingin melakukan pemesanan silakan isi form pemesanan di samping dan konfirmasi melalui kontak Admin di bawah. Pastikan nomor HP yang dicantumkan sama pada nomor HP saat melakukan konfirmasi. Serta cek kembali nomor resi dengan benar agar segera diproses. <br><br>
<img src="<?= BASE_URL; ?>asset/img/lokasi.png" width="23" height="23"alt="">  Jl. May Zen, Sei Selincah 
<br> <br>
<img src="<?= BASE_URL;?>asset/img/email.png" width="23" height="23" alt="">  acindi38@gmail.com
<br><br>
<img src="<?= BASE_URL;?>asset/img/phone-call.png" width="25" height="25" alt="">   0821-4372-2233 ( <i>Hanya melakukan konfirmasi No.resi dan cek nomor</i>). </p>
</div>
<div class="col-md-6">
<form action="helper.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Nama</label>
      <input type="nama" name="nama" class="form-control" autofocus>
    </div>
    <div class="form-group col-md-6">
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" id>
    </div>

  <div class="form-group col-md-6">
      <label for="">No.Telp (WA)</label>
      <input type="number" name="wa" class="form-control" id>
    </div>

 
  <div class="form-group col-md-6">
    <label for="inputAddress2 col-md-6">Alamat </label>
    <input type="text"name="alamat" class="form-control" id="inputAddress2" placeholder="Masukkan Alamat Penjemputan">
  </div>
  <div class="form-group col-md-6">
      <label for="inputState">Layanan</label>
      <select id="layanan" name="layanan" class="form-control" onchange="my_fun(this.value);">
        <option selected>Choose...</option>
        <option value="kiloan">Kiloan</option>
        <option value="satuan">Satuan</option>
        <option value="karpet">Karpet</option>
        <option value="shoes">Sepatu</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Jenis item</label>
      <select id="item" name="jenis_item"class="form-control"><option>Pilih Layanan</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="">Jumlah</label>
      <input type="number" name="jumlah" class="form-control" id>
    </div>
   </div>
  
  <button type="submit" name="submit"  class="btn btn-primary">Order Sekarang</button>
</form>
</div>
</div>
</div>

<?php require 'template/footer.php';?>