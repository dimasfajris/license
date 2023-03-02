<?php 
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM atsb WHERE id = $id")[0];

?>

<div class="white_shd full margin_bottom_30">
    <div class="full graph_head">
        <div class="heading1 margin_0">
            <h2>ATS Periode B</h2>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Deskripsi</td>
                            <td><?= nl2br(htmlspecialchars($data['deskripsi'])); ?></td>
                        </tr>
                        <tr>
                            <td>Satuan</td>
                            <td>
                                <?= nl2br(htmlspecialchars($data['satuan'])); ?></td>
                        </tr>
                        <tr>
                            <td>Volume</td>
                            <td><?= nl2br(htmlspecialchars($data['volume'])); ?></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><?= nl2br(htmlspecialchars($data['harga'])); ?></td>
                        </tr>
                        <tr>
                            <td>Start Date</td>
                            <td><?= date('d-m-Y', strtotime($data['start_date'])); ?></td>
                        </tr>
                        <tr>
                            <td>End Date</td>
                            <td><?= date('d-m-Y', strtotime($data['end_date'])); ?></td>
                        </tr>
                        <tr>
                            <td>Perangkat</td>
                            <td><?= nl2br(htmlspecialchars($data['perangkat'])); ?></td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td><?= nl2br(htmlspecialchars($data['tahun'])); ?></td>
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
