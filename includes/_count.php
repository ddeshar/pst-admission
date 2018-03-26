<?php
    $count_ton = "SELECT COUNT(newstu_admit_class) AS ton FROM newstudent WHERE newstu_admit_class <= 4"; // ม.ต้น
    $ton_result = mysqli_query($connection,$count_ton);
    while ($tn = mysqli_fetch_array($ton_result)){
        $ton = $tn["ton"];
    }
    
    $count_plai = "SELECT COUNT(newstu_admit_class) AS pali FROM newstudent WHERE newstu_admit_class >= 5"; // ม.ปลาย
    $plai_result = mysqli_query($connection,$count_plai);
    while ($pai = mysqli_fetch_array($plai_result)){
        $plai = $pai["pali"];
    }
    
    $count_total = "SELECT COUNT(*) AS total FROM newstudent"; // สรุป
    $total_result = mysqli_query($connection,$count_total);
    while ($tal = mysqli_fetch_array($total_result)){
        $total = $tal["total"];
    }