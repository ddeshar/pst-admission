<?php 
    include "includes/admissions/_var.php";
    include "includes/_header.php";
    include "includes/_nav.php";
    include "includes/_slide.php";
?>
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="nav_top_align">
                                <i class="fa fa-file-o"></i>
                                Blank Page
                            </h4>
                        </div>
                        <div class="col-lg-6">
                            <div class="float-right">
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
                                </div>
                        </div>
                    </div>
                </div>
            </header>

            <?php
                if ($source == "add") {
                    include "includes/admissions/add.php";
                } else if ($source == "edit") {
                    include "includes/admissions/edit.php";
                } else if ($source == "profile"){
                    include "includes/admissions/profile.php";
                } else {
                    include "includes/admissions/view.php";
                }
            ?>
        </div>
<?php
    include "includes/_footer.php";
?>