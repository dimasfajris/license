<?php

    ob_start();
    session_start();
    if(!isset($_SESSION['akun_id'])) header("location: login/login.php");
    include "koneksi.php";

?>