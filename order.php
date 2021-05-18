<?php require 'template/header.php'; ?>
<div class="container my-5 pt-5">
  <div class="row">
    <div class="col-md-5">
      <h2 class="h3">Ingin melakukan pemesanan?</h2>
      <p>Jika konsumen ingin melakukan pemesanan silakan isi form pemesanan di samping dan konfirmasi melalui kontak Admin di bawah. Pastikan nomor HP yang dicantumkan sama pada nomor HP saat melakukan konfirmasi. Serta cek kembali nomor resi dengan benar agar segera diproses.</p>
      <p><img src="<?= BASE_URL; ?>asset/img/lokasi.png" width="23" height="23" alt=""> Jl. May Zen, Sei Selincah</p>
      <p><img src="<?= BASE_URL; ?>asset/img/email.png" width="23" height="23" alt=""> acindi38@gmail.com</p>
      <p><img src="<?= BASE_URL; ?>asset/img/phone-call.png" width="25" height="25" alt=""> 0821-4372-2233 ( <i>Hanya melakukan konfirmasi No.resi dan cek nomor</i>).</p>
    </div>
    <div class="col-md-7">
      <form id="form-order">
        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="name">Nama</label>
            <input type="text" name="nama" class="form-control" required id="name" autofocus>
          </div>
          <div class="form-group col-md-12">
            <label for="wa">No.Telp (WA)</label>
            <input type="number" name="no_wa" class="form-control" required id="wa">
          </div>
          
          
          <div class="form-group col-md-12">
            <label for="address col-md-12">Alamat </label>
            <textarea name="alamat" class="form-control" required id="address" placeholder="Masukkan Alamat Penjemputan"></textarea>
          </div>
          <div class="form-group col-md-3 layanan">
            <label>Layanan</label>
            <select name="layanan[0][jenis]" class="form-control" required onchange="my_fun(this.value, 0);">
              <option selected>Pilih..</option>
              <option value="Kiloan">Kiloan</option>
              <option value="Satuan">Satuan</option>
              <option value="Karpet">Karpet</option>
              <option value="Sepatu">Sepatu</option>
            </select>
          </div>
          <div class="form-group col-md-7">
            <label>Jenis item</label>
            <select name="layanan[0][item]" class="form-control jenis-item-0">
              <option>Pilih Layanan</option>
            </select>
          </div>
          <div class="form-group col-md-2 jumlah">
            <label>Jumlah</label>
            <input type="number" name="layanan[0][jml_item]" class="form-control">
          </div>
          
          <div class="form-group col-md-2 offset-md-10">
            <button type="button" class="btn btn-link btn-tambah">Tambah +</button>
          </div>
        </div>

        <input type="submit" value="Order Sekarang" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
<script>
  function my_fun(str, id) {
    fetch(`helper.php?jenis=${str}`)
    .then(res => res.text())
    .then(data => document.querySelector(`.jenis-item-${id}`).innerHTML = data)
    .catch(err => console.log(err))
  }
</script>

<?php require 'template/footer.php'; ?>