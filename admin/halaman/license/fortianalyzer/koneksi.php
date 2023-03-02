<?php
// Koneksi ke server

$host = 'localhost' ;
$serverName = 'root' ;
$password = '' ;
$database = 'license' ;

$koneksi = mysqli_connect($host,$serverName,$password,$database);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query)
{
    // untuk memanggil variabel yg ada di luar function
    global $koneksi;

    $data = mysqli_query($koneksi, $query);

    //declare sebuah variabel yg berbentuk array
    $rows = [];

    //looping var data yg awalnya berbentuk object menjadi sebuah array associative
    while( $row = mysqli_fetch_assoc($data) ) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data)
{
    global $koneksi;

    // htmlspecialchars() = agar tag html di program tidak akan dijalankan
    $name = htmlspecialchars($data['name']);
    $jenis = htmlspecialchars($data['jenis']);
    $tipe_lisensi = htmlspecialchars($data['tipe_lisensi']);
    $Expiration = date($data['Expiration']);
    $status = htmlspecialchars($data['status']);
    $start_ats = date($data['start_ats']);
    $end_ats = date($data['end_ats']);
    $versi = htmlspecialchars($data['versi']);

    $sql = "INSERT INTO fortianalyzer VALUES ('', '$name', '$jenis', '$tipe_lisensi', '$Expiration', '$status', '$start_ats', '$end_ats', '$versi')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);

}

function edit($data)
{
    global $koneksi;

    $id = $data['id'];
    // htmlspecialchars() = agar tag html di program tidak akan dijalankan
    $name = htmlspecialchars($data['name']);
    $jenis = htmlspecialchars($data['jenis']);
    $tipe_lisensi = htmlspecialchars($data['tipe_lisensi']);
    $Expiration = date($data['Expiration']);
    $status = htmlspecialchars($data['status']);
    $start_ats = date($data['start_ats']);
    $end_ats = date($data['end_ats']);
    $versi = htmlspecialchars($data['versi']);
    
    //cek apakah user upload foto baru atau tidak
    

    $sql = "UPDATE fortianalyzer SET 
    
                name = '$name',
                jenis = '$jenis',
                tipe_lisensi = '$tipe_lisensi',
                Expiration = '$Expiration',
                status = '$status',
                start_ats = '$start_ats',
                end_ats = '$end_ats',
                versi = '$versi'
                
            WHERE id = $id ";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// function register($data)
// {
//     global $koneksi;

//     $username = strtolower(stripslashes($data['username']));
//     $email = mysqli_real_escape_string($koneksi, $data["email"]);
//     $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
//     $password = mysqli_real_escape_string($koneksi, $data["password"]);
//     $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
//     $level = strtolower(stripslashes($data['level']));
//     $foto = htmlspecialchars($data['foto']);

//     $foto = upload();
//     if( !$foto ) {
//         return false;
//     }

//     //cek username sudah ada atau belum
//     $result = mysqli_query($koneksi, "SELECT username FROM tb_user WHERE username = '$username' ");

//     if( mysqli_fetch_assoc($result) ) {
//         echo "<script>
//             alert('Username sudah ada!');
//           </script>";
//         return false;
//     }

    //cek konfirmasi password
//     if( $password !== $password2 ) {
//         echo "<script>
//             alert('Password not match!');
//           </script>";
//         return false;
//     }

//     //enkrip password
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     //tambahkan user ke database
//     mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama','$email','$username', '$password','$foto', '$level')");

//     return mysqli_affected_rows($koneksi);

// }
// function upload()
// {

//     $namaFoto = $_FILES['foto']['name'];
//     $sizeFoto = $_FILES['foto']['size'];
//     $error = $_FILES['foto']['error'];
//     $tmpName = $_FILES['foto']['tmp_name'];

//     //cek apakah user upload foto / tidak
//     //$error === 4 artinya tidak ada file yg di upload
//     if( $error === 4 ){
//         echo "<script>
//                 alert('silahkan upload file terlebih dahulu!');
//               </script>";
//         return false;
//     }

//     //cek jika file lebih dari 1mb
//     if( $sizeFoto > 1000000 ) {
//         echo "<script>
//                 alert('ukuran file terlalu besar, Max 1 MB!');
//               </script>";
//         return false;
//     } 

//     //cek yg di upload apakah png, jpg atau jpeg
//     $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiFoto = explode('.', $namaFoto);
//     $ekstensiFoto = strtolower(end($ekstensiFoto));

//     if( !in_array($ekstensiFoto, $ekstensiFotoValid) ) {
//         echo "<script>
//                 alert('format file harus jpg, jpeg, atau png!');
//               </script>";
//         return false;
//     }

//     //jika lolos pengecekkan, foto siap di upload
//     //generate nama file baru 
//     $namaFotoBaru = uniqid();
//     $namaFotoBaru .= '.'; 
//     $namaFotoBaru .= $ekstensiFoto;

//     move_uploaded_file($tmpName, 'img/' . $namaFotoBaru);

//     return $namaFotoBaru;
// }

function pencarian($katakunci)
{
    $query = "SELECT * FROM fortianalyzer
                WHERE
				name LIKE '%$katakunci%' OR
				jenis LIKE '%$katakunci%' OR
				tipe_lisensi LIKE '%$katakunci%' OR
				Quantity LIKE '%$katakunci%' OR
				Expiration LIKE '%$katakunci%' OR
				status LIKE '%$katakunci%' OR
				start_ats LIKE '%$katakunci%' OR
				end_ats LIKE '%$katakunci%' OR
				versi LIKE '%$katakunci%'
            ";
    
    // mengembalikkan fungsi yg sudah di buat(function query) di dalam fungsi pencarian
    return query($query);
}

function delete($id)
{
    global $koneksi; 

    mysqli_query($koneksi, "DELETE FROM fortianalyzer WHERE id = $id");
    return mysqli_affected_rows($koneksi);

}
?>