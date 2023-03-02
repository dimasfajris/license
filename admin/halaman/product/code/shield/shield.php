<?php
// session_start();
// if (!isset($_SESSION['login'])) {
//   header("Location: login.php");
//   exit;
// }

require 'koneksi.php';

//ambil data dari table tr_barang_masuk mengembalikkan data berupa object
$result = query("SELECT * FROM shield ORDER BY end_date ASC");

// jika user menekan tombol search
if (isset($_POST['cari'])) {

    //jika user menekan tombol cari tapi tidak mengisikan input pencarian maka
    if ($_POST['katakunci'] == '') {
        $result = query("SELECT * FROM shield");
    } else {
        $result = pencarian($_POST['katakunci']);
    }
}

// $nama = $_SESSION['nama'];
// $foto = $_SESSION['foto'];
// $level = $_SESSION['level'];

?>

<h3><i class="fa fa-angle-right"></i> Peruri Shield</h3>
<div class="row mb">
    <!-- page start-->
    <div class="content-panel">
        <form action="" method="POST" class="pull-right position search_inbox">
            <div class="input-append">
                <input type="text" class="sr-input" placeholder="Search" name="katakunci">
                <button class="btn sr-btn" type="SUBMIT" name="cari"><i class="fa fa-search"></i></button><br>
            <div><a href="index.php?page=cetakshield">
                <button class="btn btn-primary" id="cetak"> Cetak Data </button></a></div> <br>
            </div>
        </form>
        <br><br>
        <div><a href="index.php?page=tambahshield">
                <button class="btn btn-primary" id="tambah"> Tambah Data </button></a></div> <br>
<div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead style="font-size: 12px; color: Black; text-align: center; ">
                    <tr>
                        <th>#</th>
                        <th>
                            <center>Nama Lisensi</center>
                        </th>
                        <th>
                            <center>Merk</center>
                        </th>
                        <th>
                            <center>Versi</center>
                        </th>
                        <th>
                            <center>Tipe</center>
                        </th>
                        <th>
                            <center>Start License</center>
                        </th>
                        <th>
                            <center>End License</center>
                        </th>
                        <th>
                            <center>Keterangan</center>
                        </th>
                        <th>
                            <center>Action</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1; ?>
                    <?php foreach ($result as $data) : ?>
                        <tr>
                            <td> <?= $x; ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['nama_lisensi'])); ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['merk'])); ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['versi'])); ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['tipe'])); ?> </td>
                            <td> <?= $data['start_date']; ?> </td>
                            <td> <?= $data['end_date']; ?> </td>
                            <td> <?= nl2br(htmlspecialchars($data['keterangan'])); ?> </td>
                            <td>
                                <center>
                                    <a class="btn btn-outline-success btn-sm" href="index.php?page=detailshield&id=<?= $data['id']; ?>">DETAIL | </a>
                                    <a class="btn btn-outline-warning btn-sm" href="index.php?page=editshield&id=<?= $data['id']; ?>">EDIT | </a>
                                    <a class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure?')" href="index.php?page=deleteshield&id=<?= $data['id']; ?>">HAPUS</a>
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