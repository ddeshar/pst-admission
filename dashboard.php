<?php 
$global_scripts_css = <<<EOD
<link type="text/css" rel="stylesheet" href="assets/vendors/c3/css/c3.min.css"/>
<link type="text/css" rel="stylesheet" href="assets/vendors/toastr/css/toastr.min.css"/>
<link type="text/css" rel="stylesheet" href="assets/vendors/switchery/css/switchery.min.css" />
<link type="text/css" rel="stylesheet" href="assets/css/pages/new_dashboard.css"/>
EOD;
    include "includes/_header.php";
    include "includes/_nav.php";
    include "includes/_slide.php";
?>
        <!-- /#left -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-home"></i>
                            แผงควบคุม
                        </h4>
                    </div>
                    </div>
                </div>
            </header>
            <div class="outer">
                <div class="inner bg-container">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <div class="row">
                                    <div class="col-sm-6 col-12 col-lg-3">
                                        <div class="bg-primary top_cards">
                                            <div class="row icon_margin_left">

                                                <div class="col-lg-5 col-5 icon_padd_left">
                                                    <div class="float-left">
                                                        <span class="fa-stack fa-sm">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-7 icon_padd_right">
                                                    <div class="float-right cards_content">
                                                        <span class="number_val" id="sales_count"></span>
                                                        <i class="fa fa-long-arrow-up fa-2x"></i> 100 รูป
                                                        <br/>
                                                        <span class="card_description">จำนวนนักเรียน</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12 col-lg-3">
                                        <div class="bg-success top_cards">
                                            <div class="row icon_margin_left">
                                                <div class="col-lg-5  col-5 icon_padd_left">
                                                    <div class="float-left">
                                                        <span class="fa-stack fa-sm">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-eye fa-stack-1x fa-inverse text-success visit_icon"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-7 icon_padd_right">
                                                    <div class="float-right cards_content">
                                                        <span class="number_val" id="visitors_count"></span><i
                                                            class="fa fa-long-arrow-up fa-2x"></i> 100 รูป
                                                        <br/>
                                                        <span class="card_description">ม.ต้น</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12 col-lg-3">
                                        <div class="bg-warning top_cards">
                                            <div class="row icon_margin_left">
                                                <div class="col-lg-5 col-5 icon_padd_left">
                                                    <div class="float-left">
                                                        <span class="fa-stack fa-sm">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-usd fa-stack-1x fa-inverse text-warning revenue_icon"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-7 icon_padd_right">
                                                    <div class="float-right cards_content">
                                                        <span class="number_val" id="revenue_count"></span><i
                                                            class="fa fa-long-arrow-up fa-2x"></i> 100 รูป
                                                        <br/>
                                                        <span class="card_description">ม.ปลาย</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12 col-lg-3">
                                        <div class="bg-mint top_cards">
                                            <div class="row icon_margin_left">
                                                <div class="col-lg-5 col-5 icon_padd_left">
                                                    <div class="float-left">
                                                        <span class="fa-stack fa-sm">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-users  fa-stack-1x fa-inverse text-mint sub"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-7 icon_padd_right">
                                                    <div class="float-right cards_content">
                                                        <span class="number_val" id="subscribers_count"></span><i
                                                            class="fa fa-long-arrow-down fa-2x"></i> 100 รูป
                                                        <br/>
                                                        <span class="card_description">แนะนำจากรุ่นพี</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-lg-4 col-12 m-t-35">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        This Month
                                    </div>
                                    <div class="card-body">
                                        <div class="task-item">

                                            Sales
                                            <span class="float-right text-muted progress-info">52%</span>
                                            <div id="progress-bar">
                                                <!--<progress class="progress progress-danger" value="52"-->
                                                <!--max="100"></progress>-->
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 52%" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item">
                                            Projects
                                            <span class="float-right text-muted progress-primary">80%</span>
                                            <div id="progress-bar1">
                                                <!--<progress class="progress progress-warning" value="80"-->
                                                <!--max="100"></progress>-->
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item">
                                            Visitors
                                            <span class="float-right text-muted progress-warning">25%</span>
                                            <div id="progress-bar21">
                                                <!--<progress class="progress progress-success" value="25"-->
                                                <!--max="100"></progress>-->
                                                <div class="progress" id="progress-bar2">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item">
                                            New Users
                                            <span class="float-right text-muted progress-primary">93%</span>
                                            <div id="progress-bar5">
                                                <!--<progress class="progress progress-primary" value="93" max="100"></progress>-->
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 93%" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item">
                                            Revenue
                                            <span class="float-right text-muted progress-danger">50%</span>
                                            <div id="progress-bar3">
                                                <!--<progress class="progress progress-danger" value="50" max="100"></progress>-->
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item">
                                            Total sold
                                            <span class="float-right text-muted">40%</span>
                                            <div id="progress-bar4">
                                                <!--<progress class="progress progress-mint" value="40" max="100"></progress>-->
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 m-t-35">
                                <div class="block widget-notes">
                                    <div class="card" id="notes_section">
                                        <div class="card-header bg-white">
                                            Notes
                                        </div>
                                        <div class="content">
                                            <div class="notes" contenteditable="true">
                                                <div>Send e-mails.
                                                    <br> Sometimes on purpose
                                                    <br>
                                                    It is a long established
                                                    <br> Contrary to popular belief.
                                                    <br> <i>Bootstrap4 admire admin</i>
                                                    <br>Company status
                                                    <br> Sometime is special
                                                    <br> <b>Meeting with CEO</b>
                                                    <br> Team out
                                                    <br> welcome to admire

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 m-t-35">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <div class=" twitter_section_head">
                                            Team Activities
                                        </div>
                                    </div>
                                    <div class="card-block twitter_section">
                                        <ul id="nt-example1">
                                            <li>
                                                <div class="row">
                                                    <div class="col-2 col-lg-3 col-xl-2">
                                                        <img src="assets/img/images.jpg" class="rounded-circle"alt="image not found">
                                                    </div>
                                                    <div class="col-10 col-lg-9 col-xl-10">
                                                        <span class="name">Robert Rivera</span> <span
                                                            class="time">2m ago</span>
                                                        <br>
                                                        <span class="msg">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    </div>
                                                </div>
                                                <hr>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-2 col-lg-3 col-xl-2">
                                                        <img src="assets/img/images.jpg" class="rounded-circle"alt="image not found">
                                                    </div>
                                                    <div class="col-10 col-lg-9 col-xl-10">
                                                        <span class="name">Robert Rivera</span> <span
                                                            class="time">2m ago</span>
                                                        <br>
                                                        <span class="msg">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    </div>
                                                </div>
                                                <hr>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-2 col-lg-3 col-xl-2">
                                                        <img src="assets/img/images.jpg" class="rounded-circle"alt="image not found">
                                                    </div>
                                                    <div class="col-10 col-lg-9 col-xl-10">
                                                        <span class="name">Robert Rivera</span> <span
                                                            class="time">2m ago</span>
                                                        <br>
                                                        <span class="msg">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    </div>
                                                </div>
                                                <hr>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-2 col-lg-3 col-xl-2">
                                                        <img src="assets/img/images.jpg" class="rounded-circle"alt="image not found">
                                                    </div>
                                                    <div class="col-10 col-lg-9 col-xl-10">
                                                        <span class="name">Robert Rivera</span> <span
                                                            class="time">2m ago</span>
                                                        <br>
                                                        <span class="msg">Lorem Ipsum is simply dummy text of the printing.</span>
                                                    </div>
                                                </div>
                                                <hr>
                                            </li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>          
                    </form>         
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
            </div>
        </div>
        <!-- /#content -->

<?php
$global_scripts_js = <<<EOD
<script type="text/javascript" src="assets/vendors/raphael/js/raphael-min.js"></script>
<script type="text/javascript" src="assets/vendors/d3/js/d3.min.js"></script>
<script type="text/javascript" src="assets/vendors/c3/js/c3.min.js"></script>
<script type="text/javascript" src="assets/vendors/toastr/js/toastr.min.js"></script>
<script type="text/javascript" src="assets/vendors/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="assets/vendors/flotchart/js/jquery.flot.js" ></script>
<script type="text/javascript" src="assets/vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="assets/vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="assets/vendors/flotchart/js/jquery.flot.time.js"></script>
<script type="text/javascript" src="assets/vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="assets/vendors/flotchart/js/jquery.flot.categories.js"></script>
<script type="text/javascript" src="assets/vendors/flotchart/js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="assets/vendors/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="assets/vendors/jquery_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="assets/vendors/countUp.js/js/countUp.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="assets/js/pages/new_dashboard.js"></script>
EOD;
?>

<?php 
    include "includes/_footer.php";
?>