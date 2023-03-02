<?php  
require 'koneksi.php';

//cek tombol tambah apakah sudah di tekan / belum
if( isset($_POST['tambah'] ) ) {
    
    //cek apakah function tambah berhasil (akan mengembalikkan nilai 1) / tidak (akan mengembalikkan nilai 0)
    if( tambah($_POST) > 0 ) {
      echo "<script>
              alert('Penambahan data success!');
              document.location.href = 'index.php?page=ngtm01';
            </script>";
    } else {
      echo "<script>
              alert('Penambahan data Gagal!');
              document.location.href = 'index.php?page=tambahngtm01';
            </script>";
    }
    
}


?>
<link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  
<h3 style="text-align: center;">NGTM01 LICENSE</h3>
<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Input License NGTM01</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="name" name="name"
                                 type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Contents</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="contents" name="contents" 
                                type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Common Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="Common_Name" name="Common_Name" 
                                type="text" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Expiration</label>
                        <div class="col-md-3 col-xs-11">
                            <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2020-01-01"
                                class="input-append date dpYears">
                                <input type="text" readonly="" value="01-01-2014" size="16" class="form-control"
                                    name="Expiration">
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