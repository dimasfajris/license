<?php
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM user WHERE id = $id")[0];

?>

<div class="white_shd full margin_bottom_30">
    <div class="full graph_head">
        <div class="heading1 margin_0">
            <h2>Detail Problem</h2>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><?= nl2br(htmlspecialchars($data['name'])); ?></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>
                                <?= nl2br(htmlspecialchars($data['username'])); ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?= nl2br(htmlspecialchars($data['email'])); ?></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><?= nl2br(htmlspecialchars($data['password'])); ?></td>
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