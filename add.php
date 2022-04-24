<html>
<head>
	<title>Tambah Data</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="30%" border="0">
			<tr> 
				<td>nama_firda</td>
				<td><input type="text" name="nama_firda" ></td>
			</tr>
			<tr> 
				<td>email_firda</td>
				<td><input type="text" name="email_firda"></td>
			</tr>
			<tr> 
				<td>alamat_firda</td>
				<td><input type="text" name="alamat_firda"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$nama_firda = $_POST['nama_firda'];
		$email_firda = $_POST['email_firda'];
		$alamat_firda = $_POST['alamat_firda'];
		
		include_once("koneksi.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO tbl_firda (nama_firda,email_firda,alamat_firda) VALUES('$nama_firda', '$email_firda', '$alamat_firda')");
		
		echo "Data Berhasil Ditambahkan. <a href='index.php'>Lihat Hasil</a>";
	}
	?>

</body>
</html>