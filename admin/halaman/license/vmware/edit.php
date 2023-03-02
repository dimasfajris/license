<?php
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM vm WHERE id = $id")[0];
// var_dump($data['nama_barang']);
// exit;

//cek tombol tambah apakah sudah di tekan / belum
if (isset($_POST['tambah'])) {

    //cek apakah function tambah berhasil (akan mengembalikkan nilai 1) / tidak (akan mengembalikkan nilai 0)
    if (edit($_POST) > 0) {
        echo "<script>
            alert('Update data success!');
            document.location.href = 'index.php?page=vmware';
          </script>";
    } else {
        echo "<script>
            alert('Update data Gagal!');
            document.location.href = 'index.php?page=editvmware';
          </script>";
    }
}
?>

<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Edit License VMWare</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Account Number</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="account_number" value="<?= $data['account_number']; ?>" name="account_number" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Account Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="account_name" value="<?= $data['account_name']; ?>" name="account_name" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Product</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="product" value="<?= $data['product']; ?>" name="product" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Quantity</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="qty" value="<?= $data['qty']; ?>" name="qty" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Unit</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="unit" value="<?= $data['unit']; ?>" name="unit" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Folder Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="folder_name" value="<?= $data['folder_name']; ?>" name="folder_name" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">License Key</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="license_key" value="<?= $data['license_key']; ?>" name="license_key" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Custom Label</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="custom_label1" value="<?= $data['custom_label1']; ?>" name="custom_label1" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Type</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="type" value="<?= $data['type']; ?>" name="type" type="text" required />
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Number</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="number" value="<?= $data['number']; ?>" name="number" type="text" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Order Date</label>
                            <div class="col-md-3 col-xs-11">
                                <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                    <input type="text" readonly="" value="<?= $data['order_date']; ?>" size="16" class="form-control" name="order_date">
                                    <span class="input-group-btn add-on">
                                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                                <span class="help-block">Select date</span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Order Quantity</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="order_qty" value="<?= $data['order_qty']; ?>" name="order_qty" type="text" required />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Support Level</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="support_level" value="<?= $data['support_level']; ?>" name="support_level" type="text" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">License Coverage End Date</label>
                            <div class="col-md-3 col-xs-11">
                                <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                    <input type="text" readonly="" value="<?= $data['license_coverage_end_date']; ?>" size="16" class="form-control" name="license_coverage_end_date">
                                    <span class="input-group-btn add-on">
                                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                                <span class="help-block">Select date</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Contract End Date</label>
                            <div class="col-md-3 col-xs-11">
                                <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                    <input type="text" readonly="" value="<?= $data['contract_end_date']; ?>" size="16" class="form-control" name="contract_end_date">
                                    <span class="input-group-btn add-on">
                                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                                <span class="help-block">Select date</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-primary" name="tambah">Save</button>
                                <input type="button" value="Cancel" class="btn btn-secondary" onclick="history.back()">
                            </div>
                        </div>
                </form>
            </div>
        </div>
        <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->
</div>