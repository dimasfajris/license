<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require 'koneksi.php';

if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
}
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($result);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($result);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin") {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['foto'] = $foto;
		$_SESSION['nama'] = $nama;
		// alihkan ke halaman dashboard admin
		header("location:../admin/index.php");

		// cek jika user login sebagai pegawai
	} else if ($data['level'] == "viewer") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "viewer";
		$_SESSION['foto'] = $foto;
		$_SESSION['nama'] = $nama;
		// alihkan ke halaman dashboard pegawai
		header("location:../viewer/index.php");

		// cek jika user login sebagai admin junior 
	} else if ($data['level'] == "adminjr") {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "adminjr";
		$_SESSION['foto'] = $foto;
		$_SESSION['nama'] = $nama;
		// alihkan ke halaman dashboard pegawai
		header("location:../adminjr/index.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
} else {
	header("location:login.php?pesan=gagal");
}
