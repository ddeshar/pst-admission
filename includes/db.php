<?php
    ob_start();

    $db['db_host'] = "localhost";
    $db['db_user'] = "root";
    $db['db_pass'] = "mysql";
    $db['db_name'] = "pst_admission";

    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }

    $connection = mysqli_connect(DB_HOST, DB_USER,DB_PASS,DB_NAME);
    $query = "SET NAMES utf8";
    
    mysqli_query($connection,$query);
    mysqli_set_charset($connection, 'utf8');
    date_default_timezone_set("Asia/Bangkok");