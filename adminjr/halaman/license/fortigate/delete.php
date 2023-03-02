<?php 
require 'koneksi.php';

$id = $_GET['id'];

// jika function delete mengembalikkan nilai > 1 (sukses)
if( delete($id) > 0 ) {
    echo "<script>
            alert('Delete data success!');
            document.location.href = 'index.php?page=fortigate';
        </script>";
} else {
echo "<script>
        alert('Delete data Gagal!');
        document.location.href = 'index.php?page=inputfortigate';
    </script>";
}

?>