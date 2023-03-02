<?php
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM atsb WHERE id = $id")[0];
// var_dump($data['nama_barang']);
// exit;

//cek tombol tambah apakah sudah di tekan / belum
if (isset($_POST['tambah'])) {

    //cek apakah function tambah berhasil (akan mengembalikkan nilai 1) / tidak (akan mengembalikkan nilai 0)
    if (edit($_POST) > 0) {
        echo "<script>
            alert('Update data success!');
            document.location.href = 'index.php?page=atsb';
          </script>";
    } else {
        echo "<script>
            alert('Update data Gagal!');
            document.location.href = 'index.php?page=editatsb';
          </script>";
    }
}
?>

<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Edit ATS Periode B</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Deskripsi</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="deskripsi" value="<?= $data['deskripsi']; ?>" name="deskripsi" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Satuan</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="satuan" value="<?= $data['satuan']; ?>" name="satuan" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Volume</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="volume" value="<?= $data['volume']; ?>" name="volume" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Harga</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="harga" value="<?= $data['harga']; ?>" name="harga" type="text" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Start Date</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                <input type="text" readonly="" value="<?= $data['start_date']; ?>" size="16" class="form-control" name="start_date">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <span class="help-block">Select date</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">End Date</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01" class="input-append date dpYears">
                                <input type="text" readonly="" value="<?= $data['end_date']; ?>" size="16" class="form-control" name="end_date">
                                <span class="input-group-btn add-on">
                                    <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                                </span>
                            </div>
                            <span class="help-block">Select date</span>
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Perangkat</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="perangkat" value="<?= $data['perangkat']; ?>" name="perangkat" type="text" required />
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Tahun</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="tahun" value="<?= $data['tahun']; ?>" name="tahun" type="text" required />
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