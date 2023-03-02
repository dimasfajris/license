<?php 
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM tera WHERE id = $id")[0];

?>

<div class="white_shd full margin_bottom_30">
    <div class="full graph_head">
        <div class="heading1 margin_0">
            <h2>TERA</h2>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Nama Lisensi</td>
                            <td>
                                <?= nl2br(htmlspecialchars($data['nama_lisensi'])); ?></td>
                        </tr>
                        <tr>
                            <td>Merk</td>
                            <td><?= nl2br(htmlspecialchars($data['merk'])); ?></td>
                        </tr>
                        <tr>
                            <td>Versi</td>
                            <td><?= nl2br(htmlspecialchars($data['versi'])); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Start ATS</td>
                            <td><?=$data['start_ats']; ?></td>
                        </tr>
                        <tr>
                            <td>End ATS</td>
                            <td><?=$data['end_ats']; ?></td>
                        </tr>
                        <tr>
                            <td>Tipe</td>
                            <td><?= nl2br(htmlspecialchars($data['tipe'])); ?></td>
                        </tr>
                        <tr>
                            <td>Start License</td>
                            <td><?=$data['start_date']; ?></td>
                        </tr>
                        <tr>
                            <td>End License</td>
                            <td><?=$data['end_date']; ?></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><?= nl2br(htmlspecialchars($data['keterangan'])); ?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-footer">
                    <input type="button" value="Go Back" class="btn btn-secondary" onclick="history.back()">
                </div>
            </div>
        </div>
    </form>
</div>
