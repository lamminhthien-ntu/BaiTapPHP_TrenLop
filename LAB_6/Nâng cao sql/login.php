<!--Connect MySQL Database -->
<?php include('connect.php') ?>
<!--Bootstrap CDN -->
<?php include('bootstrap_cdn.php') ?>
<!-- Login Processing -->
<?php
session_start();
if (isset($_POST['but_submit'])) {

    $uname = mysqli_real_escape_string($conn, $_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn, $_POST['txt_pwd']);

    if ($uname != "" && $password != "") {

        $sql_query = "select count(*) as cntUser from users where username='" . $uname . "' and password='" . $password . "'";
        $result = mysqli_query($conn, $sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if ($count > 0) {
            $_SESSION['uname'] = $uname;
             header('Location: index_nhanvien.php');
            echo $uname;
        } else {
            echo "Mật khẩu và tài khoản không hợp lệ";
        }
    }
}
?>

<head>
    <!-- Login CSS -->
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form method="post" action="login.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="username" name="txt_uname">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="password" name="txt_pwd">
                        </div>
                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn" name="but_submit">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Don't have an account?<a href="#">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#">Forgot your password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>