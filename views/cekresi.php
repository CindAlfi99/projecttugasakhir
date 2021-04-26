<?php require 'template/header.php';



// if(isset($_POST['submit'])){
// $cari = $_POST['no_resi'];
// $result =mysqli_query($con,"SELECT * FROM order_masuk WHERE no_resi LIKE %$cari%"); 
// };
// if(isset($_POST['submit'])){
// $no_resi = $_POST['no_resi'];
// $query = mysqli_query($con, "SELECT * FROM order_masuk WHERE no_resi =$no_resi");
// $fetch = mysqli_fetch_assoc($query);
// if(mysqli_num_rows($query) > 0){

//   header('Location: statuscucian.php');
// }
// else{
//   $err = mysqli_error($con);
// $message_err = "<div class='alert alert-warning alert-dismissible fade show' role='alert'> <strong>Gagal cek!</strong> Periksa kembali nomor resi anda.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";

// }
// }


?>
<!-- cek resi -->
<div class="container my-5 pt-5">
  <div class="row " id="container">
    <div class="col-md-6">Lacak <i>status cucian</i> Anda sesuai dengan nomor resi yang diberikan pada saat pemesanan. Pastikan Anda sudah melakukan konfirmasi nomor resi pada Admin. Jika belum silakan konfirmasi terlebih dahulu di kontak bawah ini.
    </div>
    <div class="col-md-5">
      <img src="<?= BASE_URL; ?>asset/img/laundry-satuan.png" width="200" height="200" alt="">
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-md-6">
      <div class="form-group">
        <label for="exampleInputEmail1"><b>Silahkan Cek nomor resi anda</b></label>
        <input type="number" class="form-control" autofocus placeholder="Masukkan Nomor Resi" aria-describedby="emailHelp" name="keyword" id="keyword">
      </div>
      <button type="submit" name="cari" class="btn btn-primary" id="tombol-cari">Cek Resi</button>
    </div>
  </div>
</div>

<?php require 'template/footer.php'; ?>