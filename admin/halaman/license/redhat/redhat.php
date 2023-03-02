<?php 
// session_start();
// if (!isset($_SESSION['login'])) {
//   header("Location: login.php");
//   exit;
// }

require 'koneksi.php';

//ambil data dari table tr_barang_masuk mengembalikkan data berupa object
$result = query("SELECT * FROM redhat ORDER BY End_Date ASC" );

// jika user menekan tombol search
if( isset($_POST['cari']) ) {

  //jika user menekan tombol cari tapi tidak mengisikan input pencarian maka
  if( $_POST['katakunci'] == '') {
    $result = query("SELECT * FROM redhat");
  } else {
    $result = pencarian($_POST['katakunci']);
  }
}

// $nama = $_SESSION['nama'];
// $foto = $_SESSION['foto'];
// $level = $_SESSION['level'];

?>

<h3><i class="fa fa-angle-right"></i> License Redhat</h3>
<div class="row mb">
    <!-- page start-->
    <div class="content-panel">
        <form action="" method="POST" class="pull-right position search_inbox">
            <div class="input-append">
                <input type="text" class="sr-input" placeholder="Search" name="katakunci">
                <button class="btn sr-btn" type="SUBMIT" name="cari"><i class="fa fa-search"></i></button>
                
            </div>
        </form>
        <br><br>
        <div><a href="index.php?page=tambahredhat">
            <button class= "btn btn-primary" id= "tambah"> Tambah Data </button></a></div> <br>
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered"
                id="hidden-table-info">
                <thead style="font-size: 12px; color: Black; text-align: center; ">
                    <tr>
                        <th>#</th>
                        <th>
                            <center>Subscription Number</center>
                        </th>
                        <th>
                            <center>Subscription Name</center>
                        </th>
                        <th>
                            <center>Contract Number</center>
                        </th>
                        <th>
                            <center>Quantity</center>
                        </th>
                        <th>
                            <center>Start Date</center>
                        </th>
                        <th>
                            <center>End Date</center>
                        </th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1; ?>
                    <?php foreach( $result as $data ) : ?>
                    <tr>
                        <td> <?= $x; ?> </td>
                        <td> <?= nl2br(htmlspecialchars($data['Subscription_Number'])); ?> </td>
                        <td> <?= nl2br(htmlspecialchars($data['Subscription_Name'])); ?> </td>
                        <td> <?= nl2br(htmlspecialchars($data['Contract_Number'])); ?> </td>
                        <td> <?= nl2br(htmlspecialchars($data['Quantity'])); ?> </td>
                        <td> <?= date('d-m-Y', strtotime($data['Start_Date'])); ?> </td>
                        <td> <?= date('d-m-Y', strtotime($data['End_Date'])); ?> </td>
                        <td>
                            <center>
                                <a class="btn btn-outline-success btn-sm"
                                    href="index.php?page=detailredhat&id=<?= $data['id']; ?>">DETAIL | </a>
                                <a class="btn btn-outline-warning btn-sm"
                                    href="index.php?page=editredhat&id=<?= $data['id']; ?>">EDIT | </a>
                                <a class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')"
                                    href="index.php?page=deleteredhat&id=<?= $data['id']; ?>">HAPUS</a>
                            </center>
                        </td>
                        <?php $x++; ?>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- page end-->
</div>