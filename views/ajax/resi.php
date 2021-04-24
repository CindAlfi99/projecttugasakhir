<?php


$keyword = $_GET['keyword'];
$db = mysqli_connect('localhost','root','','rumahlaundry381');
$result =mysqli_query($db, "SELECT * FROM order_masuk WHERE no_resi = '$keyword'");

$row = mysqli_fetch_assoc($result);
    $rows[] = $row;
    // cek seluruh data mahasiswa
    
    
    ?>
    <table class="table" border="1" cellpadding="20" cellspacing="2">
    
    <tr>
    
    <?php if(mysqli_num_rows($result) > 0){?>
<th scope="col">No resi</th>
<th scope="col">Nama_pemesan</th>
<th scope="col">Layanan</th>
<th scope="col">Jenis_Item</th>
<th scope="col">Proses</th>

   
    <tr>
  
    <td><?= $rows[0]['no_resi']?></td>
    <td><?=  $rows[0]['nama_pemesan']?></td>
    <td><?=  $rows[0]['layanan']?></td>
    <td><?=  $rows[0]['jenis_item']?></td>
    <td><?=  $rows[0]['proses']?></td>
    </tr>
    

   
    </table>
    <?php }else { ?>
    <p><b>Nomor resi salah! <b><br></p>
   <p style="color:red;"> Periksa kembali nomor resi anda </p>
    <?php } ?>
       


