<?php

include_once("koneksi.php");
 
$id_firda = $_GET['id_firda'];
 
$result = mysqli_query($mysqli, "DELETE FROM tbl_firda WHERE id_firda=$id_firda");
 
header("Location:index.php");
?>