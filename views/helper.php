<?php
require '../config/config.php';

if ($_GET["jenis"]) {
    $val=$_GET["jenis"];
    $val_M = mysqli_real_escape_string($conn, $val);
    
    $layanan = array(
        "kiloan" => "laundry_kiloan",
        "satuan" => "laundry_satuan",
        "shoes" => "laundry_sepatu",
        "karpet" => "laundry_karpet",
    );
    
    $sql="SELECT * FROM " . $layanan[$val];
    $result= mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)>0) {
        echo "<select>";
        while ($rows= mysqli_fetch_assoc($result)) {
            echo "<option value=".$rows['item'].">".$rows['item']." Harga :".$rows['harga']."</option>";
        }
        echo "</select>";
    } else {
        echo "<select>
                <option>Select Layanan</option>
            </select>";
    }
} else {
    $val = $_POST;
    $length = count($_POST['layanan']);
    $no_resi = rand(1000, 9999);
    $nama = $_POST['nama'];
    $no_wa = $_POST['no_wa'];
    $alamat = $_POST['alamat'];
    $status = 'jemput';
    $tgl_pesan = date('Y-m-d H:i:s');
    $tgl_selesai = date('Y-m-d H:i:s', time()+172800);
    $layanan = $_POST['layanan'];

    for ($i=0; $i < $length; $i++) { 
        $sql="INSERT INTO order_masuk (no_resi, nama, no_wa, alamat, jenis, item, jml_item, harga, status, tanggal_pesan, tanggal_selesai)";
        $sql.=' VALUES ("'.$no_resi.'", "'.$nama.'", "'.$no_wa.'", "'.$alamat.'", "'.$layanan[$i]['jenis'].'", "'.$layanan[$i]['item'].'", '.$layanan[$i]['jml_item'].', 0, "'.$status.'", "'.$tgl_pesan.'", "'.$tgl_selesai.'" )';
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            die('Invalid query: ' . mysqli_error($conn));
        }
    }
    echo json_encode(array('status' => 'berhasil'));
}
?>
