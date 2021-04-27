<?php 
function ubahProduk($data){
$connn = mysqli_connect('localhost','root','','rumahlaundry381');
$id = $data['id'];
$pemesan = $data['nama_pemesan'];
$wa = $data['no_wa'];
$alamat = $data['alamat_jemput'];
$layanan = $data['jenis_layanan'];
$item = $data['jenis_item'];
$pesan = $data['tgl_pesan'];
$selesai = $data['tgl_selesai'];
mysqli_query($connn, "UPDATE order_masuk SET nama_pemesan = '$pemesan' no_wa = '$wa' alamat_jemput = '$alamat' jenis_layanan = '$layanan' jenis_item = '$item' tanggal_pesan = '$pesan' tanggal_selesai = '$selesai' WHERE id = $id");
return mysqli_affected_rows($connn);

}