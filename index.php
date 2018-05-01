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
    include "includes/_count.php";

    include_once 'includes/_chart.php';

    include "includes/function.php";

    $ptom = ( $ton / $total ) * 100;
    $pplai = ( $plai / $total ) * 100;

// $ton 
// $plai
// $total
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
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-12">
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="bg-primary top_cards">
                                            <div class="row icon_margin_left">

                                                <div class="col-lg-5 col-5 icon_padd_left">
                                                    <div class="float-left">
                                                        <span class="fa-stack fa-sm">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-users fa-stack-1x fa-inverse text-primary sales_hover"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-7 icon_padd_right">
                                                    <div class="float-right cards_content">
                                                    <span class="number_val" id="sales_count"></span>
                                                            <i class="fa fa-long-arrow-up fa-2x"></i> <?=$total?> รูป
                                                            <br/>
                                                            <span class="card_description">จำนวนนักเรียน</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="bg-success top_cards">
                                            <div class="row icon_margin_left">
                                                <div class="col-lg-5  col-5 icon_padd_left">
                                                    <div class="float-left">
                                                    <span class="fa-stack fa-sm">
                                                            <i class="fa fa-circle fa-stack-2x"></i>
                                                            <i class="fa fa-user fa-stack-1x fa-inverse text-success visit_icon"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-7 icon_padd_right">
                                                    <div class="float-right cards_content">
                                                    <span class="number_val" id="visitors_count"></span><i
                                                                class="fa fa-long-arrow-up fa-2x"></i> <?=$ton?> รูป
                                                            <br/>
                                                            <span class="card_description">ม.ต้น</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="bg-warning top_cards">
                                            <div class="row icon_margin_left">
                                                <div class="col-lg-5 col-5 icon_padd_left">
                                                    <div class="float-left">
                                                    <span class="fa-stack fa-sm">
                                                            <i class="fa fa-circle fa-stack-2x"></i>
                                                            <i class="fa fa-user fa-stack-1x fa-inverse text-warning revenue_icon"></i>
                                                            </span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-7 icon_padd_right">
                                                    <div class="float-right cards_content">
                                                    <span class="number_val" id="revenue_count"></span><i
                                                                class="fa fa-long-arrow-up fa-2x"></i> <?=$plai?> รูป
                                                            <br/>
                                                            <span class="card_description">ม.ปลาย</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-6 col-12">
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
                                                                class="fa fa-long-arrow-down fa-2x"></i> - รูป
                                                            <br/>
                                                            <span class="card_description">พามาสมัคร</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7 col-12">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        สรุปการรับสมัครนักเรียนใหม่ ปีการศึกษา 2561
                                    </div>
                                    <div class="card-body">
                                        <div class="task-item">

                                            ม.ต้น
                                            <span class="float-right text-muted progress-info"><?=$ton ?> รูป</span>
                                            <div id="progress-bar">
                                                <!--<progress class="progress progress-danger" value="52"-->
                                                <!--max="100"></progress>-->
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$ptom?>%;" aria-valuenow="<?=$ptom?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item">
                                            ม.ปลาย
                                            <span class="float-right text-muted progress-primary"><?=$plai ?> รูป</span>
                                            <div id="progress-bar1">
                                                <!--<progress class="progress progress-warning" value="80"-->
                                                <!--max="100"></progress>-->
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: <?=$pplai?>%;" aria-valuenow="<?=$pplai?>" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="task-item">
                                            รวม
                                            <span class="float-right text-muted progress-warning"><?=$total ?> รูป</span>
                                            <div id="progress-bar21">
                                                <!--<progress class="progress progress-success" value="25"-->
                                                <!--max="100"></progress>-->
                                                <div class="progress" id="progress-bar2">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-lg-4 col-12 m-t-35">
                                <div class="block widget-notes">
                                    <div class="card" id="notes_section">
                                        <div class="card-header bg-white">
                                            สรุปการรับสมัครนักเรียนใหม่ ปีการศึกษา 61 ตามจังหวัด
                                        </div>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                                        <div class="content" style="overflow: hidden; width: auto; height: auto;">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>จังหวัด</th>
                                                        <th>ม ๑</th>
                                                        <th>ม ๒</th>
                                                        <th>ม ๓</th>
                                                        <th>ม ๔</th>
                                                        <th>ม ๕</th>
                                                        <th>ม ๖</th>
                                                        <th>รวม</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while($row = mysqli_fetch_array($result1)){ ?>                   
                                                    <tr>
                                                        <td><?=$row["provience"]?></td>
                                                        <td><?=$row["one"]?></td>
                                                        <td><?=$row["two"]?></td>
                                                        <td><?=$row["three"]?></td>
                                                        <td><?=$row["four"]?></td>
                                                        <td><?=$row["five"]?></td>
                                                        <td><?=$row["six"]?></td>
                                                        <td><?=$row["stu"]?></td>
                                                    </tr>
                                                    <?php } ?> 
                                                    <tr>
                                                        <td colspan="7">รวม</td>
                                                        <td><?=$total?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.2; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-5 col-12 m-t-35">
                                <div class="block widget-notes">
                                    <div class="card" id="notes_section">
                                        <div class="card-header bg-white">
                                            สรุปการรับสมัครนักเรียนใหม่ ปีการศึกษา 61 ตามสังกัดวัด
                                        </div>
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                                        <div class="content" style="overflow: hidden; width: auto; height: auto;">
                                        <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>จังหวัด</th>
                                                        <th>ม ๑</th>
                                                        <th>ม ๒</th>
                                                        <th>ม ๓</th>
                                                        <th>ม ๔</th>
                                                        <th>ม ๕</th>
                                                        <th>ม ๖</th>
                                                        <th>รวม</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php while($row = mysqli_fetch_array($wats)){ ?>                   
                                                    <tr>
                                                        <td><?=$row["wat"]?></td>
                                                        <td><?=$row["one"]?></td>
                                                        <td><?=$row["two"]?></td>
                                                        <td><?=$row["three"]?></td>
                                                        <td><?=$row["four"]?></td>
                                                        <td><?=$row["five"]?></td>
                                                        <td><?=$row["six"]?></td>
                                                        <td><?=$row["stud"]?></td>
                                                    </tr>
                                                    <?php } ?> 
                                                    <tr>
                                                        <td colspan="7">รวม</td>
                                                        <td><?=$total?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.2; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-12 m-t-35">
                                <div class="card">
                                    <div class="card-header bg-white">
                                        <div class=" twitter_section_head">
                                            นักเรียน ใหม่
                                        </div>
                                    </div>
                                    <div class="card-block twitter_section">
                                        <ul id="nt-example1">
                                        <?php 
                                            $strSQL = "SELECT * FROM `newstudent`  ORDER BY `newstudent`.`newstu_id` DESC LIMIT 5 ";
                                            $new_stusent = mysqli_query($connection, $strSQL);

                                            while($student_new = mysqli_fetch_array($new_stusent)){
                                                $sub_date = $student_new["created_at"];
                                                $ago = timeago($sub_date);
                                        ?>
                                            <li>
                                                <div class="row">
                                                    <div class="col-2 col-lg-3 col-xl-2">
                                                        <?php
                                                        $test = $student_new["newstu_photo"];
                                                            if($test > 0){ ?>
                                                                <img src="<?php echo './assets/img/newstu/' . $test;?>" class="rounded-circle"alt="<?php echo $student_new["newstu_titlename"];?><?php echo $student_new["newstu_name"];?> <?php echo $student_new["newstu_lastname"];?>">
                                                            <?php }else{ ?>
                                                                <img src="assets/img/newstu/default.jpg" class="rounded-circle" alt="<?php echo $student_new["newstu_titlename"];?><?php echo $student_new["newstu_name"];?> <?php echo $student_new["newstu_lastname"];?>">
                                                            <?php } ?>
                                                    </div>
                                                    <div class="col-10 col-lg-9 col-xl-10">
                                                        <a href="admission.php?source=profile&newstu=<?php echo $student_new["newstu_id"];?>">
                                                        <span class="name"><?php echo $student_new["newstu_titlename"];?><?php echo $student_new["newstu_name"];?> <?php echo $student_new["newstu_lastname"];?></span> <span
                                                            class="time"><?php echo $ago;?></span>
                                                        <br>
                                                        <!-- <span class="msg">Lorem Ipsum is simply dummy text of the printing.</span> -->
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>
                                            </li>
                                            <?php 
                                                }
                                                mysqli_close($connection);
                                            ?>
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>

                        </div>          
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
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