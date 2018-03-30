<?php 
    include_once 'includes/db.php';
    
    include 'includes/session.php';
    if(isset($_SESSION['user_id'])) {
    } else {
      header("location: login.php");
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>PST | Admission</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="assets/img/logo1.ico"/> -->
    <!-- global styles-->
    <link type="text/css" rel="stylesheet" href="assets/css/components.css"/>
    <link type="text/css" rel="stylesheet" href="assets/css/custom.css"/>
    <?=$global_scripts_css?>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of global styles-->
</head>