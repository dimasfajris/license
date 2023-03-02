<?php
// Koneksi ke server

$host = 'localhost' ;
$serverName = 'root' ;
$password = '' ;
$database = 'ops' ;

$koneksi = mysqli_connect($host,$serverName,$password,$database);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>