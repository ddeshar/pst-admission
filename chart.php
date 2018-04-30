<?php  
    include_once 'includes/_header.php';
    include "includes/_nav.php";
    include "includes/_slide.php";

    include_once 'includes/_count.php';
    include_once 'includes/_chart.php';
    include_once 'includes/chart_js.php';

?>
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="nav_top_align">
                            <i class="fa fa-file-o"></i>
                            ข้อมูลรับสมัครนักเรียน
                        </h4>
                    </div>
                </div>
            </div>

        </header>
        <div class="outer">
            <div class="inner bg-container">

                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                สรุปจำนวนนักเรียนที่มาสมัครเรียน ตามสังกัดวัด
                            </div>
                            <div class="card-block">
                                <div id="wats" class="centered" style="height : 400px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; height: 500px;"></canvas><canvas class="flot-overlay" width="374" height="301" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 374px; height: 301px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 27.5px; left: 238.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#00c0ef;">Profile<br>19%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 149.5px; left: 280.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#668cff;">Facebook <br>17%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 249.5px; left: 176px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#0fb0c0;">Twitter <br>25%</div></span><span class="pieLabel" id="pieLabel3" style="position: absolute; top: 144.5px; left: 43.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#ff8080;">Google+<br>23%</div></span><span class="pieLabel" id="pieLabel4" style="position: absolute; top: 19.5px; left: 105.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#ffb300;">Linkedin<br>16%</div></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                สรุปจำนวนนักเรียนที่มาสมัครเรียน ตามจังหวัด
                            </div>
                            <div class="card-block">
                                <div id="provience" class="centered" style="height : 400px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; height: 500px;"></canvas><canvas class="flot-overlay" width="374" height="301" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 374px; height: 301px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 27.5px; left: 238.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#00c0ef;">Profile<br>19%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 149.5px; left: 280.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#668cff;">Facebook <br>17%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 249.5px; left: 176px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#0fb0c0;">Twitter <br>25%</div></span><span class="pieLabel" id="pieLabel3" style="position: absolute; top: 144.5px; left: 43.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#ff8080;">Google+<br>23%</div></span><span class="pieLabel" id="pieLabel4" style="position: absolute; top: 19.5px; left: 105.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#ffb300;">Linkedin<br>16%</div></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                สรุปจำนวนนักเรียนที่มาสมัครเรียน
                            </div>
                            <div class="card-block">
                                <div id="totalstudent" class="centered" style="height : 400px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; height: 500px;"></canvas><canvas class="flot-overlay" width="374" height="301" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 374px; height: 301px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 27.5px; left: 238.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#00c0ef;">Profile<br>19%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 149.5px; left: 280.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#668cff;">Facebook <br>17%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 249.5px; left: 176px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#0fb0c0;">Twitter <br>25%</div></span><span class="pieLabel" id="pieLabel3" style="position: absolute; top: 144.5px; left: 43.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#ff8080;">Google+<br>23%</div></span><span class="pieLabel" id="pieLabel4" style="position: absolute; top: 19.5px; left: 105.5px;"><div style="font-size:x-small;text-align:center;padding:2px;color:#ffb300;">Linkedin<br>16%</div></span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php 
    include_once 'includes/_footer.php';
?>