<?php
require 'koneksi.php';

$id = $_GET['id'];
// var_dump($id);
// exit;

$data = query("SELECT * FROM user WHERE id = $id")[0];
// var_dump($data['name']);
// exit;

//cek tombol tambah apakah sudah di tekan / belum
if (isset($_POST['tambah'])) {

    //cek apakah function tambah berhasil (akan mengembalikkan nilai 1) / tidak (akan mengembalikkan nilai 0)
    if (edit($_POST) > 0) {
        echo "<script>
            alert('Update data success!');
            document.location.href = 'index.php?page=profildiri';
          </script>";
    } else {
        echo "<script>
            alert('Update data Gagal!');
            document.location.href = 'index.php?page=editprofildiri';
          </script>";
    }
}
?>

<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Edit Profil User</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id']; ?>">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Nama Lengkap</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="name" value="<?= $data['name']; ?>" name="name" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Username</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="username" value="<?= $data['username']; ?>" name="username" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="email" value="<?= $data['email']; ?>" name="email" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="password" value="<?= $data['password']; ?>" name="password" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Profil</label>
                        <div class="col-lg-10">
                            <select name="level" class="form-control">
                                <option selected> ---- Pilih Akses ---- </option>
                                <option value="#">Admin</option>
                                <option value="#">User</option>
                            </select>
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