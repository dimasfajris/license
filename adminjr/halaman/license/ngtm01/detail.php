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
            <h2>Detail NGTM01</h2>
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
                            <td>Contents</td>
                            <td>
                                <?= nl2br(htmlspecialchars($data['contents'])); ?></td>
                        </tr>
                        <tr>
                            <td>Common Name</td>
                            <td><?= nl2br(htmlspecialchars($data['Common_Name'])); ?></td>
                        </tr>
                        <tr>
                            <td>Expiration</td>
                            <td><?= date('d-m-Y', strtotime($data['Expiration'])); ?></td>
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
