<?php
include "../func/connect.php";
if (isset($_COOKIE['logged_in'])) {
    //unset($_COOKIE['logged_in']);
    setcookie("logged_in", "");
    echo "<script>alert('Thanks'); window.location = 'login.php';</script>";
} else
    echo "<script>alert('Login First!'); window.location = '/czmec/admin/login.php';</script>";
?>