<?php
        session_start();
        // if (!isset($_SESSION['is_admin'])) {
        //     header("Location: admin.php");
        // }else if (!isset($_SESSION['is_member'])) {
        //     header("Location: member.php");
        // }else if (!isset($_SESSION['is_user'])) {
        //     header("Location: user.php");
        // }
        // require 'dbconnect.php';
        $session_login_id = $_SESSION['user_id'];

        $qry_user = "SELECT * FROM users WHERE user_id='$session_login_id'";
        $result_user = mysqli_query($connection,$qry_user);
        if ($result_user) {
            $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);

            $s_login_firstname = $row_user['firstname'];
            $s_login_lastname = $row_user['lastname'];
            $s_login_username = $row_user['username'];
            $s_login_email = $row_user['email'];
            $s_login_avatar = $row_user['avatar'];
            $s_login_avatar = $row_user['status'];
            mysqli_free_result($result_user);
        }
