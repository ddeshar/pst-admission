<div id="left">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <!-- <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture" src="assets/img/admin.jpg"> -->
                        <p class="text-white user-info">&nbsp;&nbsp;&nbsp;&nbsp;Welcome <?=$s_login_firstname?></p></a>

                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <?php
                    if ( $s_login_avatar == 500 ){
                ?>
                <li class="active">
                    <a href="dashboard.php">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;แผงควบคุม</span>
                    </a>
                </li>
                <?php
                    }       
                    if ($s_login_avatar == 500 || $s_login_avatar == 100 || $s_login_avatar == 0){
                ?>
                <li>
                    <a href="admission.php?source=add">
                        <i class="fa fa-pencil"></i>
                        <span class="link-title">&nbsp;แบบฟอร์มสมาคัรเรียน</span>
                    </a>
                </li>
                <?php
                    }
                    if ( $s_login_avatar == 500 ){
                ?>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-file"></i>
                        <span class="link-title">&nbsp; ข้อมูลรับสมัคร</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="admission.php">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; นักเรียนใหม่
                            </a>
                        </li>                        
                    </ul>
                </li>
                <?php } ?>
            </ul>
            <!-- /#menu -->
        </div>
        <!-- /#left -->