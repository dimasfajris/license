<?php 
// session_start();
// if (!isset($_SESSION['login'])) {
//   header("Location: login.php");
//   exit;
// }

require 'koneksi.php';

//ambil data dari table tr_barang_masuk mengembalikkan data berupa object
$result = query("SELECT * FROM resolution_time ORDER BY id ASC" );
$op = query("SELECT * FROM sla_operational ORDER BY id ASC" );
$support = query("SELECT * FROM sla_support ORDER BY id ASC" );

// jika user menekan tombol search
if( isset($_POST['cari']) ) {

  //jika user menekan tombol cari tapi tidak mengisikan input pencarian maka
  if( $_POST['katakunci'] == '') {
    $result = query("SELECT * FROM resolution_time");
  } else {
    $result = pencarian($_POST['katakunci']);
  }
}

// $nama = $_SESSION['nama'];
// $foto = $_SESSION['foto'];
// $level = $_SESSION['level'];

?>

<div class="container">
    <div class="row">
        <div class="centered">
            <h1>Service Level Aggrement</h1>
            <img src="img/impact.png" alt="">
        </div>
        <br><br>
        <h4>Resolution Time berdasarkan Matriks Prioritas</h4>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <th>No</th>
                <th>Priority</th>
                <th>Waktu Resolution Time</th>
                <th>Kategori Service Desk</th>
            </thead>
            <tbody>
                <?php $x = 1; ?>
                <?php foreach( $result as $data ) : ?>
                <tr>
                    <td> <?= $x; ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['priority'])); ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['resolution'])); ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['service_desk'])); ?> </td>
                    <?php $x++; ?>
                    <?php endforeach; ?>
            </tbody>
        </table>

        <h4>Service Level Aggrement (SLA) Operasional</h4>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <th>No</th>
                <th>Item SLA</th>
                <th>Tolok Ukur</th>
            </thead>
            <tbody>
                <?php $x = 1; ?>
                <?php foreach( $op as $data ) : ?>
                <tr>
                    <td> <?= $x; ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['item_sla'])); ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['tolok_ukur'])); ?> </td>
                    <?php $x++; ?>
                    <?php endforeach; ?>
            </tbody>
        </table>

        <h4>Service Level Aggrement (SLA) Support</h4>
        <table class="table table-bordered table-striped table-condensed">
            <thead>
                <th>No</th>
                <th>Kategori Service Desk</th>
                <th>Tolok Ukur</th>
                <th>Keterangan</th>
            </thead>
            <tbody>
                <?php $x = 1; ?>
                <?php foreach( $support as $data ) : ?>
                <tr>
                    <td> <?= $x; ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['service_desk'])); ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['tolok_ukur'])); ?> </td>
                    <td> <?= nl2br(htmlspecialchars($data['keterangan'])); ?> </td>
                    <?php $x++; ?>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>