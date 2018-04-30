<?php 
    include "includes/admissions/_reg_var.php";
    include "includes/_reg_header.php";
?>

<body>
<!--</div>-->
    <div class="preloader" 
        style=" position: fixed;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: 100000;
                backface-visibility: hidden;
                background: #ffffff;">
        <div class="preloader_img" 
            style=" width: 200px;
                    height: 200px;
                    position: absolute;
                    left: 48%;
                    top: 48%;
                    background-position: center;
                    z-index: 999999">
            <img src="assets/img/loader.gif" style=" width: 40px;" alt="loading...">
        </div>
    </div>
    
    <div class="bg-dark" id="wrap">
        <div id="top">
            <!-- .navbar -->
            <nav class="navbar navbar-static-top">
                <div class="container-fluid m-0">
                    <a class="navbar-brand float-left text-center" href="reg.php">
                        <h4 class="text-white"><img src="assets/img/logow.png" class="admin_img" alt="logo"> PST | ADMISSION</h4>
                    </a>
                    <!-- <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
                    </span>
                    </div> -->
                </div>

                <!-- /.container-fluid --> </nav>
            <!-- /.navbar -->
            <!-- /.head --> </div>
        <!-- /#top -->

        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="nav_top_align">
                                <i class="fa fa-file-o"></i>
                                แบบฟอร์ม รับสมัครนักเรียน โรงเรียนพระปริยัติธรรมวัดโสธรวราราม
                            </h4>
                        </div>
                        <div class="col-lg-6">
                            <!-- <div class="float-right">
                                <ol class="breadcrumb nav_breadcrumb_top_align">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">
                                            <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item active">Blank Page</li>
                                </ol>
                            </div> -->
                        </div>
                    </div>
                </div>
            </header>

            <?php
                include "includes/admissions/regis.php";
            ?>
        </div>
<?php
    include "includes/_footer.php";
?>