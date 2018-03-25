<div class="outer form_wizzards">
    <div class="inner bg-container ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <!-- <div class="card-header bg-white">
                        <i class="fa fa-file-text-o"></i>
                        General Wizard
                    </div> -->
                    <div class="card-block m-t-20">
                        <div id="rootwizard_no_val">
                            <ul class="nav nav-pills">
                                <li class="nav-item user1 m-t-15">
                                    <a class="nav-link" href="#tab11" data-toggle="tab"><span class="userprofile_tab">1</span>ประวัตินักเรียน</a>
                                </li>
                                <li class="nav-item user2 m-t-15">
                                    <a class="nav-link profile_details" href="#tab21" data-toggle="tab"><span class="profile_tab">2</span>ข้อมูลด้านการเรียน</a>
                                </li>
                                <li class="nav-item finish_tab m-t-15">
                                    <a class="nav-link " href="#tab31" data-toggle="tab"><span>3</span>หลักฐานในการสมัคร</a>
                                </li>
                            </ul>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="tab-content m-t-20">
                                    <div class="tab-pane" id="tab11">
                                        <?php include_once "includes/admissions/_1.php"?>
                                        <br>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn1"><a>หน้าก่อนหน้า</a></li>
                                            <li class="next next_btn1"><a>หน้าต่อไป</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab21">
                                        <?php include_once "includes/admissions/_2.php"?>
                                        <br>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn2"><a>หน้าก่อนหน้า</a></li>
                                            <li class="next next_btn2"><a>หน้าต่อไป</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="tab31">
                                        <?php include_once "includes/admissions/_3.php"?>
                                        <br>
                                        <ul class="pager wizard pager_a_cursor_pointer">
                                            <li class="previous previous_btn3"><a>หน้าก่อนหน้า</a></li>
                                            <li class="next"><a><input class="btn btn-primary layout_btn_prevent" type="submit" name="create_post" value="ส่งข้อมูล"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>