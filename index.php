<?php
require 'includes/db.php';

  if(isset($_POST['btn-login'])){

    $login_username = mysqli_real_escape_string($connection, trim($_POST["username"]));
    $login_password = mysqli_real_escape_string($connection, trim($_POST["password"]));

    $salt = 'tikde78uj4ujuhlaoikiksakeidke';
    $hash_login_password = hash_hmac('sha256', $login_password, $salt);

    $sql = "SELECT * FROM users WHERE username=? AND password=?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt,"ss", $login_username,$hash_login_password);
    mysqli_execute($stmt);
    $result_user = mysqli_stmt_get_result($stmt);

    if ($result_user->num_rows == 1) {
        session_start();
        $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
        $_SESSION['user_id'] = $row_user['user_id'];

        if ($row_user['status'] == 500) {
          $_SESSION['is_admin'] = 500;
          $_SESSION['login_username'] = $row_user['login_username'];
          header("Location: dashboard.php");

        }elseif ($row_user['status'] == 100) {
          $_SESSION['is_member'] = 100;
          $_SESSION['login_username'] = $row_user['login_username'];
          header("Location: admission.php?source=add");

        }elseif ($row_user['status'] == 0) {
          $_SESSION['is_user'] = 0;
          $_SESSION['login_username'] = $row_user['login_username'];
          header("Location: student.php");
        }
    } else{
      // $error = "die('Query Failed' . mysqli_error($conn))";

      $error =  "sorry ผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login | Admire</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--Global styles -->
    <link type="text/css" rel="stylesheet" href="./assets/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="./assets/css/custom.css"/>
    <!--End of Global styles -->
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="./assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" href="./assets/vendors/wow/css/animate.css"/>
    <!--End of Plugin styles-->
    <link type="text/css" rel="stylesheet" href="./assets/css/pages/login.css"/>
</head>
<body>
    <div class="preloader" style=" position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 100000;
            backface-visibility: hidden;
            background: #ffffff;">
        <div class="preloader_img" style="width: 200px;
                height: 200px;
                position: absolute;
                left: 48%;
                top: 48%;
                background-position: center;
                z-index: 999999">
            <img src="./assets/img/loader.gif" style=" width: 40px;" alt="loading...">
        </div>
    </div>
<div class="container wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2s">
    <div class="row">
        <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-10 push-sm-1 login_top_bottom">
            <div class="row">
                <div class="col-lg-8 push-lg-2 col-md-10 push-md-1 col-sm-12">
                    <div class="login_logo login_border_radius1">
                        <h3 class="text-center">
                            <img src="./assets/img/logow.png" alt="josh logo" class="admire_logo"><span class="text-white"> PST AdmissiOn &nbsp;<br/>
                                Log In</span>
                        </h3>
                    </div>
                    <div class="bg-white login_content login_border_radius">
                        <form action="index.php" method="post" >
                        <!-- <form action="index.php" id="login_validator" method="post" class="login_validator"> -->
                            <div class="form-group">
                                <label for="text" class="col-form-label"> username</label>
                                <div class="input-group">
                                    <span class="input-group-addon input_email"><i
                                            class="fa fa-envelope text-primary"></i></span>
                                    <input type="text" class="form-control  form-control-md" id="text" name="username" placeholder="Username">
                                </div>
                            </div>
                            <!--</h3>-->
                            <div class="form-group">
                                <label for="password" class="col-form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon addon_password"><i
                                            class="fa fa-lock text-primary"></i></span>
                                    <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="btn-login" value="Log In" class="btn btn-primary btn-block login_button">
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input form-control">
                                        <span class="custom-control-indicator"></span>
                                        <a class="custom-control-description">Keep me logged in</a>
                                    </label>
                                </div>
                                <div class="col-6 text-right forgot_pwd">
                                    <a href="forgot_password.html" class="custom-control-description forgottxt_clr">Forgot password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 m-t-10">
                                    <div class="icon-white btn-facebook icon_padding loginpage_border">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                        <span class="text-white icon_padding text-center question_mark">Log In With Facebook</span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 pull-lg-right m-t-10">
                                    <div class="icon-white btn-google icon_padding loginpage_border">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                        <span class="text-white icon_padding question_mark">Log In With Google+</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Don't you have an Account? </label>
                            <a href='register.html' class="text-primary login_hover"><b>Sign Up</b></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- global js -->
<script type="text/javascript" src="./assets/js/jquery.min.js"></script>
<script type="text/javascript" src="./assets/js/tether.min.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.min.js"></script>
<!-- end of global js-->
<!--Plugin js-->
<script type="text/javascript" src="./assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="./assets/vendors/wow/js/wow.min.js"></script>
<!--End of plugin js-->
<script type="text/javascript" src="./assets/js/pages/login.js"></script>
</body>

</html>