<?php
// Koneksi ke server

$host = 'localhost' ;
$serverName = 'root' ;
$password = '' ;
$database = 'license' ;

$koneksi = mysqli_connect($host,$serverName,$password,$database);

//Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query)
{
	// untuk memanggil variabel yang ada diluar function
	global $koneksi;

	$data = mysqli_query($koneksi, $query);

	// declare sebuah variabel yang berbentuk array
	$row = [];
	// looping var data yang awalnya berbentuk object menjadi sebuah array associativ
	while ($row = mysqli_fetch_assoc($data)){
		$rows[] = $row;
	}
	return $rows;
}

function register($data){
	global $koneksi;
	$name = strtolower(stripslashes($data['name']));
	$username = strtolower(stripslashes($data['username']));
	$email = strtolower(stripslashes($data['email']));
	$password = mysqli_real_escape_string($koneksi, $data['password']);
	$password2 = mysqli_real_escape_string($koneksi, $data['password2']);
	$level = strtolower(stripslashes($data['level']));
	
	// cek username sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username' ");
	
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('Username Sudah ada!');
			</script>";
			return false;
	}
	
	//cek konfirmasi password
	if( $password !== $password2){
		echo "<script>
			alert('Password tidak sama!');
			</script>";
			return false;
	}
	
	// enkrip password
	$password = password_hash($password, PASSWORD_DEFAULT);
	
	// tambahkan user ke database
	mysqli_query($koneksi, "INSERT INTO user VALUES('', '$name','$username','$email','$password', '$level')");
	
	return mysqli_affected_rows($koneksi);
	
	}
