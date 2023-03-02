<?php
require 'koneksi.php';
$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM trust WHERE id = $id")[0];
// var_dump($data['nama_barang']);
// exit;

//cek tombol tambah apakah sudah di tekan / belum
if (isset($_POST['tambah'])) {

    //cek apakah function tambah berhasil (akan mengembalikkan nilai 1) / tidak (akan mengembalikkan nilai 0)
    if (edit($_POST) > 0) {
        echo "<script>
            alert('Update data success!');
            document.location.href = 'index.php?page=trust';
          </script>";
    } else {
        echo "<script>
            alert('Update data Gagal!');
            document.location.href = 'index.php?page=edittrust';
          </script>";
    }
}
?>

<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Edit Data Lisensi Trust</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                   <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Nama Lisensi</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="nama_lisensi" value="<?= $data['nama_lisensi']; ?>" name="nama_lisensi" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Merk</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="merk" value="<?= $data['merk']; ?>" name="merk" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Versi</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="versi" value="<?= $data['versi']; ?>" name="versi" type="text" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Start ATS</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                <input type="text" value="<?= $data['start_ats']; ?>" size="16" class="form-control" name="start_date">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <span class="help-block">Select date</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">End ATS</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                <input type="text" value="<?= $data['end_ats']; ?>" size="16" class="form-control" name="end_date">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <span class="help-block">Select date</span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Tipe</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="tipe" value="<?= $data['tipe']; ?>" name="tipe" type="text" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Start License</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                <input type="text" value="<?= $data['start_date']; ?>" size="16" class="form-control" name="start_date">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <span class="help-block">Select date</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">End License</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                <input type="text" value="<?= $data['end_date']; ?>" size="16" class="form-control" name="end_date">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <span class="help-block">Select date</span>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Keterangan</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="biaya" value="<?= $data['keterangan']; ?>" name="biaya" type="text" required />
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