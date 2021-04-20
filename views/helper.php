<?php
//koneksi
$conn= mysqli_connect("localhost", "root", "","rumahlaundry381");
if (!$conn) {
	exit("Sorry, Connection error..");
}
$val=$_GET["value"];
$val_M = mysqli_real_escape_string($conn, $val);
//kondisi
if($val == 'satuan'){
$sql="SELECT * FROM laundry_satuan";
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
}

else if($val == 'shoes'){
    $sql="SELECT * FROM laundry_sepatu";
    $result= mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result)>0) {
    
        echo "<select>";
    
        while ($rows= mysqli_fetch_assoc($result)) {
            echo "<option value=".$rows['item'].">".$rows['item']." Harga :".$rows['harga']."</option>";
        }
    
        echo "</select>";
        
    } else {
        echo "<select>
                <option>Select Drink</option>
            </select>";
    }
    }
    else if($val == 'karpet'){
        $sql="SELECT * FROM laundry_karpet";
        $result= mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result)>0) {
        
            echo "<select>";
        
            while ($rows= mysqli_fetch_assoc($result)) {
                echo "<option value=".$rows['item'].">".$rows['item']." Harga :".$rows['harga']."</option>";
            }  
        
            echo "</select>";
            
        } else {
            echo "<select>
                    <option>Select Drink</option>
                </select>";
        }
        }
        else if($val == 'kiloan'){
            $sql="SELECT * FROM laundry_kiloan";
            $result= mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result)>0) {
            
                echo "<select>";
            
                while ($rows= mysqli_fetch_assoc($result)) {
                    echo "<option value=".$rows['item'].">".$rows['item']." Harga :".$rows['harga']."</option>";
                }
            
                echo "</select>";
                
            } else {
                echo "<select>
                        <option>Select Drink</option>
                    </select>";
            }
            }
            // $no_resi = (rand(1, 1000000). "<br>");
            // echo $no_resi;
            
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman nomor_resi</title>
</head>
<body>

<?php if(isset($_POST['submit'])):?>
                <!-- var_dump($_POST['nama']); -->
               Nama item : <?= $_POST['nama']; ?>
               Alamat : <?= $_POST['alamat']; ?>
                
               
            <?php endif; ?>
<table>
  
</body>
</html>
