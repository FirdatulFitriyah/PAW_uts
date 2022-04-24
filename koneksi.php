<?php

$databaseHost = 'localhost';
$databaseName = 'db_020';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(!$mysqli){
    echo "koneksi gagal";
}
?>