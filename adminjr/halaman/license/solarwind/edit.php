<?php 
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM solarwind WHERE id = $id")[0];
// var_dump($data['nama_barang']);
// exit;

//cek tombol tambah apakah sudah di tekan / belum
if( isset($_POST['tambah'] ) ) {
    
  //cek apakah function tambah berhasil (akan mengembalikkan nilai 1) / tidak (akan mengembalikkan nilai 0)
  if( edit($_POST) > 0 ) {
    echo "<script>
            alert('Update data success!');
            document.location.href = 'index.php?page=solarwind';
          </script>";
  } else {
    echo "<script>
            alert('Update data Gagal!');
            document.location.href = 'index.php?page=editsolarwind';
          </script>";
  }
    
}
?>

<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Edit License Solarwind</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action=""
                    enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="name"
                                value="<?= $data['name']; ?>" name="name" type="text"
                                required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Expiration</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01"
                                class="input-append date dpYears">
                                <input type="text" readonly="" value="<?= $data['expiration']; ?>" size="16" class="form-control"
                                    name="expiration">
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