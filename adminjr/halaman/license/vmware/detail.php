<?php 
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM vm WHERE id = $id")[0];

?>

<div class="white_shd full margin_bottom_30">
    <div class="full graph_head">
        <div class="heading1 margin_0">
            <h2>Detail VMWare</h2>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Account Number</td>
                            <td><?= nl2br(htmlspecialchars($data['account_number'])); ?></td>
                        </tr>
                        <tr>
                            <td>Account Name</td>
                            <td>
                                <?= nl2br(htmlspecialchars($data['account_name'])); ?></td>
                        </tr>
                        <tr>
                            <td>Product</td>
                            <td><?= nl2br(htmlspecialchars($data['product'])); ?></td>
                        </tr>
                        <tr>
                            <td>Quantity</td>
                            <td><?= nl2br(htmlspecialchars($data['qty'])); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Unit</td>
                            <td><?= nl2br(htmlspecialchars($data['unit'])); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Folder Name</td>
                            <td><?= nl2br(htmlspecialchars($data['folder_name'])); ?></td>
                        </tr>
                        
                        <tr>
                            <td>License Key</td>
                            <td><?= nl2br(htmlspecialchars($data['license_key'])); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Custom Label</td>
                            <td><?= nl2br(htmlspecialchars($data['custom_label1'])); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Type</td>
                            <td><?= nl2br(htmlspecialchars($data['type'])); ?></td>
                        </tr>
                        
                        <tr>
                            <td>Number</td>
                            <td><?= nl2br(htmlspecialchars($data['number'])); ?></td>
                        </tr>
                        <tr>
                            <td>Order Date</td>
                            <td><?= date('d-m-Y', strtotime($data['order_date'])); ?></td>
                        </tr>
                        <tr>
                            <td>Order Quantity</td>
                            <td><?= nl2br(htmlspecialchars($data['order_qty'])); ?></td>
                        </tr>
                        <tr>
                            <td>Support Level</td>
                            <td><?= nl2br(htmlspecialchars($data['support_level'])); ?></td>
                        </tr>
                        <tr>
                            <td>License Coverage End Date</td>
                            <td><?= date('d-m-Y', strtotime($data['license_coverage_end_date'])); ?></td>
                        </tr>
                        <tr>
                            <td>Contract End Date</td>
                            <td><?= date('d-m-Y', strtotime($data['contract_end_date'])); ?></td>
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
