<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli, "SELECT * FROM tbl_firda ORDER BY id_firda DESC");
?>
 
<html>
<head>    
    <title>Halaman Depan</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
 
<body style="background-color: silver;">
<h1>TABEL DATA</h1>
<a href="add.php">Tambahkan Data</a><br/><br/>
 
    <table width='80%' border=5>
 
    <tr style="background-color: grey;">
        <th>id_firda</th> 
        <th>nama_firda</th> 
        <th>email_firda</th> 
        <th>alamat_firda</th> 
        <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id_firda']."</td>";
        echo "<td>".$user_data['nama_firda']."</td>";
        echo "<td>".$user_data['email_firda']."</td>";
        echo "<td>".$user_data['alamat_firda']."</td>";    
        echo "<td><a href='edit.php?id_firda=$user_data[id_firda]'>Edit</a> | <a href='delete.php?id_firda=$user_data[id_firda]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
    
</body>
</html>