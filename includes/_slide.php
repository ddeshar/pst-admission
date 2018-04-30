<div id="left">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <!-- <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="assets/img/admin.jpg"> -->
                        <p class="text-white user-info">&nbsp;&nbsp;&nbsp;&nbsp;<?=$s_login_firstname?></p></a>

                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <?php
                    if ( $s_login_status == 500 || $s_login_status == 100 ){
                ?>
                <li class="active">
                    <a href="index.php">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;แผงควบคุม</span>
                    </a>
                </li>
                <li>
                    <a href="chart.php">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;Chart</span>
                    </a>
                </li>
                <?php
                    }       
                    if ($s_login_status == 500 || $s_login_status == 100 || $s_login_status == 0){
                ?>
                <li>
                    <a href="admission.php?source=add">
                        <i class="fa fa-pencil"></i>
                        <span class="link-title">&nbsp;แบบฟอร์มสมาคัรเรียน</span>
                    </a>
                </li>
                <?php
                    }
                    if ( $s_login_status == 500 || $s_login_status == 100 ){
                ?>
                <li>
                    <a href="admission.php">
                        <i class="fa fa-database"></i>
                        <span class="link-title">&nbsp;ข้อมูลสถิติรับสมัคร</span>
                    </a>
                </li>
                <?php } 
                    if ( $s_login_status == 500 ){
                ?>
                <li>
                    <a href="users.php">
                        <i class="fa fa-database"></i>
                        <span class="link-title">&nbsp;Users</span>
                    </a>
                </li>
                <?php } ?>
            </ul>
            <!-- /#menu -->
        </div>
        <!-- /#left -->