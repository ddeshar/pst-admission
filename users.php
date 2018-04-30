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
                                Users
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

            <div class="outer">
                <div class="inner bg-container">
                    <div class="card">
                        <div class="card-header bg-white">
                            User Grid
                        </div>
                        <div class="card-block m-t-35" id="user_body">
                            <div class="table-toolbar">
                                <div class="btn-group float-right users_grid_tools">
                                    <div class="tools"></div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">ที่</th>
                                                <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Name</th>
                                                <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">UserId</th>
                                                <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">password</th>
                                                <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">email</th>
                                                <!-- <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $sql= "SELECT * FROM `users`  ORDER BY `users`.`user_id` ASC";
                                                                    
                                        $result = mysqli_query($connection, $sql);

                                        if (mysqli_num_rows($result) > 0){
                                            $i = 1;
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $newstu_id              = $row['newstu_id'];
                                                $firstname                   = $row['firstname'];
                                                $username            = $row['username'];
                                                $email             = $row['email'];
                                        ?>
                                            <tr role="row" class="even">
                                                <td class="sorting_1"><?php echo $i++; ?></td>
                                                <td><?php echo $firstname; ?></td>
                                                <td><?php echo $username; ?></td>
                                                <td class="center">123456</td>
                                                <td class="email"><?php echo $email; ?></td>
                                            </tr>
                                            <?php       }
                                                    }else{
                                                        echo " O results";
                                                    }
                                                    mysqli_close($connection);
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
            </div>
        </div>
<?php
    include "includes/_footer.php";
?>