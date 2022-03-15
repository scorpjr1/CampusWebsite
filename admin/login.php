<?php

include "../func/header.php";
include "../func/connect.php";

if (!isset($_COOKIE['logged_in']) || $_COOKIE['logged_in']!="") {
    if (isset($_POST['tombol_login'])) {
        if ($_POST['username'] == null || $_POST['password'] == null)
            echo "<script>alert('Jangan Curang!!!'); window.location = '/czmec/index.php';</script>";
        else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = mysql_query("select * from user where username = '$username' && password = '$password'");
            $row = mysql_fetch_array($query);
            
            if ($row) {
                setcookie("logged_in", "betul");
                echo "<script>alert('Success'); window.location = 'control.php';</script>";
            }
            else {
                echo "<script>alert('Failed'); window.location = 'login.php';</script>";
            }
        }
    }
    else {

?>
<center>
<div class="container" style="padding-top: 100px;">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card card-blog">
            <div class="card-title" style="margin-top: 25px;">
                <h2 class="title">Login</h2>
            </div>
            <div class="card-content">
                <form method="post" action="">
                    <input
                        type="text"
                        class="form-control"
                        name="username"
                        placeholder="Username"
                        style="width: 200px;"
                        required="required"/>
                    <input
                        type="password"
                        class="form-control"
                        placeholder="Password"
                        name="password"
                        style="width: 200px;"
                        required="required"/><br/>
                    <input type="submit" class="btn btn-primary" value="Login" name="tombol_login" style="box-shadow: 0 2px 2px 0 #9999991a, 0 3px 1px -2px #9993, 0 1px 5px 0 #9999991a;" />
                </form>
            </div>
        </div>
    </div>
</div>
</center>
<?php }
}
else
    echo "<script>window.location = 'control.php';</script>";

    include "../func/footerJs.php";

?>