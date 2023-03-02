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
    $account_number = htmlspecialchars($data['account_number']);
    $account_name = htmlspecialchars($data['account_name']);
    $product = htmlspecialchars($data['product']);
    $qty = htmlspecialchars($data['qty']);
    $unit = htmlspecialchars($data['unit']);
    $folder_name = htmlspecialchars($data['folder_name']);
    $license_key = htmlspecialchars($data['license_key']);
    $custom_label1 = htmlspecialchars($data['custom_label1']);
    $type = htmlspecialchars($data['type']);
    $number = htmlspecialchars($data['number']);
    $order_date = date($data['order_date']);
    $order_qty = htmlspecialchars($data['order_qty']);
    $support_level = htmlspecialchars($data['support_level']);
    $license_coverage_end_date = date($data['license_coverage_end_date']);
    $contract_end_date = date($data['contract_end_date']);
    
       
    $sql = "INSERT INTO vm VALUES ('', '$account_number', '$account_name', '$product', '$qty', '$unit', '$folder_name', '$license_key', '$custom_label1', '$type', '$number', '$order_date', '$order_qty', '$support_level', '$license_coverage_end_date', '$contract_end_date')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);

}

function edit($data)
{
    global $koneksi;

    $id = $data['id'];
    // htmlspecialchars() = agar tag html di program tidak akan dijalankan
    $account_number = htmlspecialchars($data['account_number']);
    $account_name = htmlspecialchars($data['account_name']);
    $product = htmlspecialchars($data['product']);
    $qty = htmlspecialchars($data['qty']);
    $unit = htmlspecialchars($data['unit']);
    $folder_name = htmlspecialchars($data['folder_name']);
    $license_key = htmlspecialchars($data['license_key']);
    $custom_label1 = htmlspecialchars($data['custom_label1']);
    $type = htmlspecialchars($data['type']);
    $number = htmlspecialchars($data['number']);
    $order_date = date($data['order_date']);
    $order_qty = htmlspecialchars($data['order_qty']);
    $support_level = htmlspecialchars($data['support_level']);
    $license_coverage_end_date = date($data['license_coverage_end_date']);
    $contract_end_date = date($data['contract_end_date']);
    
    //cek apakah user upload foto baru atau tidak
    

    $sql = " UPDATE vm SET 
    
                account_number = '$account_number',
                account_name = '$account_name',
                product = '$product',
                qty = '$qty',
                unit = '$unit',
                folder_name = '$folder_name',
                license_key = '$license_key',
                custom_label1 = '$custom_label1',
                type = '$type',
                number = '$number',
                order_qty = '$order_qty',
                support_level = '$support_level',
                order_date = '$order_date',
                license_coverage_end_date = '$license_coverage_end_date',
                contract_end_date = '$contract_end_date'
                
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
    $query = "SELECT * FROM vm
                WHERE
				account_number LIKE '%$katakunci%' OR
				account_name LIKE '%$katakunci%' OR
				product LIKE '%$katakunci%' OR
				qty LIKE '%$katakunci%' OR
				unit LIKE '%$katakunci%' OR
				folder_name LIKE '%$katakunci%' OR
				license_key LIKE '%$katakunci%' OR
				custom_label1 LIKE '%$katakunci%' OR
				type LIKE '%$katakunci%' OR
				number LIKE '%$katakunci%' OR
				order_qty LIKE '%$katakunci%' OR
				order_date LIKE '%$katakunci%' OR
				support_level LIKE '%$katakunci%' OR
				contract_end_date LIKE '%$katakunci%' OR
				license_coverage_end_date LIKE '%$katakunci%'
            ";
    
    // mengembalikkan fungsi yg sudah di buat(function query) di dalam fungsi pencarian
    return query($query);
}

function delete($id)
{
    global $koneksi; 

    mysqli_query($koneksi, "DELETE FROM vm WHERE id = $id");
    return mysqli_affected_rows($koneksi);

}
?>