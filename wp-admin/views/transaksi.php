<?php require 'template/header.php';?>
<div class="container ml-4" style="margin-bottom:150px">
<div class="row">
    <div class="col-md-11">

<h5>List Pembayaran Konsumen</h5>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nomor resi</th>
      <th scope="col">Nama Pelanggan</th>
      <th scope="col">Nama Layanan</th>
      <th scope="col">Biaya</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Satuan</th>
      <th scope="col">Biaya Akhir</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>039484</td>
      <td>Ani</td>
      <td>Layanan Satuan</td>
      <th>63.000</th>
      <th>5</th>
      <td>Kg</td>
      <th>75000</th>
      <td>Edit | hapus</td>
    </tr>

  </tbody>
</table>
</div>

</div>
<hr class="bg-primary mr-5">
<!-- transaksi -->

<div class="row ml-2"><h5>Transaksi</h5></div>
<form class="form-inline">
<div class="form-group mx-sm-3 mb-2 m-2">
    <label for="nama_layanan" class="sr-only">Nama Layanan</label>
    <input type="password" class="form-control p-2 bg-light" id="nama_layanan" placeholder="nama layanan">
  </div>
  <div class="form-group mx-sm-3 mb-2 m-2">
    <label for="nomor_resi" class="sr-only">Nomor Resi</label>
    <input type="number" class="form-control p-2 bg-light" id="nomor_resi" placeholder="Nomor resi">
  </div>
  <div class="form-group mx-sm-3 mb-2 m-2">
    <label for="tanggal" class="sr-only">Tanggal</label>
    <input type="date" class="form-control p-2 bg-light" id="tanggal" placeholder="Tanggal">
  </div>
  <div class="form-group mx-sm-3 mb-2 m-2">
    <label for="nama_item" class="sr-only">Nama Item</label>
    <input type="password" class="form-control p-2 bg-light" id="nama_item" placeholder="nama item">
  </div>
  
  <div class="form-group mx-sm-3 mb-2 m-2">
 
    <label for="biaya" class="sr-only p-4">Biaya</label>
    <input type="password" class="form-control p-2 bg-light" id="biaya" placeholder="biaya">
  </div>
  <div class="form-group mx-sm-3 mb-2 m-2">
    <label for="jumlah" class="sr-only">Jumlah</label>
    <input type="password" class="form-control p-2 bg-light" id="jumlah" placeholder="jumlah">
  </div>
  <div class="form-group mx-sm-3 mb-2 m-2">
    <label for="satuan" class="sr-only">Satuan</label>
    <input type="password" class="form-control p-2 bg-light" id="satuan" placeholder="satuan">
  </div>
  <div class="form-group mx-sm-2 mb-2 m-2">
    <label for="ongkir" class="sr-only">Biaya Ongkir</label>
    <input type="number" class="form-control p-3 bg-light" id="ongkir" placeholder="ongkir">
  </div>
  <div class="form-group mx-sm-3 mb-2 m-2">
    <label for="biaya_akhir" class="sr-only">Biaya Akhir</label>
    <input type="number" class="form-control p-5 bg-light" id="biaya_akhir" placeholder="biaya_akhir">
  </div>

  <button type="submit" class="btn btn-primary mb-2 col-md-2 ml-5">Jumlah</button>
  
  <button type="submit" class="btn btn-info mb-2 col-md-2 ml-3">Cetak</button>
</form>
</div>

 <?php require 'template/footer.php';?>