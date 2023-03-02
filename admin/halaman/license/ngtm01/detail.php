<?php 
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM ngtm01 WHERE id = $id")[0];

?>

<div class="white_shd full margin_bottom_30">
    <div class="full graph_head">
        <div class="heading1 margin_0">
            <h2>Detail DNS</h2>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><?= nl2br(htmlspecialchars($data['name'])); ?></td>
                        </tr>
                        <tr>
                            <td>DNS</td>
                            <td><?= nl2br(htmlspecialchars($data['Common_Name'])); ?></td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td><?= nl2br(htmlspecialchars($data['jenis'])); ?></td>
                        </tr>
                        <tr>
                            <td>Tipe Lisensi</td>
                            <td><?= nl2br(htmlspecialchars($data['tipe_lisensi'])); ?></td>
                        </tr>
                        <tr>
                            <td>Expiration</td>
                            <td><?= date('d-m-Y', strtotime($data['Expiration'])); ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><?= nl2br(htmlspecialchars($data['status'])); ?></td>
                        </tr>
                        <tr>
                            <td>Mulai ATS</td>
                            <td><?= date('d-m-Y', strtotime($data['start_ats'])); ?></td>
                        </tr>
                        <tr>
                            <td>Akhir ATS</td>
                            <td><?= date('d-m-Y', strtotime($data['end_ats'])); ?></td>
                        </tr>
                        <tr>
                            <td>Versi</td>
                            <td><?= nl2br(htmlspecialchars($data['versi'])); ?></td>
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
