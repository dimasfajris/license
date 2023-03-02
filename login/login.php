<?php
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
    //     $x = mysqli_fetch_assoc($result['']);
    //  var_dump($x);
    //  exit;
    //cek username
    if (mysqli_num_rows($result) === 1) {
        // cek password 
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            header("location:../admin/index.php");
            exit;
        } else {
            echo "<script>
            alert('Password salah!');
            </script>";
        }
    } else {
        echo "<script>
        alert('Username salah!');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Performance Operation</title>

    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
    <div id="login-page">
        <div class="container">
            <form class="form-login" action="cek_login.php" method="post">
                <h2 class="form-login-heading">sign in now</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" name="username" placeholder="Username .." required="required" autofocus>
                    <br>
                    <input type="password" class="form-control" name="password" class="form_login" placeholder="Password .." required="required">
                    <label class="checkbox"> </label>
                    <button class="btn btn-theme btn-block" type="submit" name="login"><i class="fa fa-lock"></i> SIGN IN</button>
                </div>
            </form>
        </div>
    </div>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/back-peruri.jpg", {
            speed: 500
        });
    </script>
</body>

</html>