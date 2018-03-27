<?php 
if (mysqli_num_rows($stu_result) > 0) {
    $row = mysqli_fetch_array($stu_result);
    $newstu_id          = $row["newstu_id"];
    $newstu_titlename   = $row["newstu_titlename"];
    $newstu_name        = $row["newstu_name"];
    $newstu_lastname    = $row["newstu_lastname"];
    $newstu_chaya       = $row["newstu_chaya"];
    $newstu_petname     = $row["newstu_petname"];
    $newstu_dob         = $row["newstu_dob"];
    $newstu_bgroup      = $row["newstu_bgroup"];
    $newstu_weight      = $row["newstu_weight"];
    $newstu_height      = $row["newstu_height"];
    $newstu_nationalid  = $row["newstu_nationalid"];
    $newstu_houseno     = $row["newstu_houseno"];

    $newstu_photo       = $row["newstu_photo"];
    $created_at         = $row["created_at"];

    $address_no         = $row["address_no"];
    $address_moo        = $row["address_moo"];
    $address_house      = $row["address_house"];
    $address_tambol     = $row["address_tambol"];
    $address_district   = $row["address_district"];
    $address_provience  = $row["address_provience"];
    $address_zip        = $row["address_zip"];
    $address_tel        = $row["address_tel"];

    $evi_1              = $row["evi_1"];
    $evi_2              = $row["evi_2"];
    $evi_3              = $row["evi_3"];
    $evi_4              = $row["evi_4"];
    $evi_5              = $row["evi_5"];
    $evi_6              = $row["evi_6"];
    $evi_7              = $row["evi_7"];
    $evi_10             = $row["evi_10"];
    $evi_11             = $row["evi_11"];
    $evi_8              = $row["evi_8"];
    $evi_9              = $row["evi_9"];
    $evi_12             = $row["evi_12"];

    if($evi_1 == 0){
        $ev_1 = "ยังไม่ได้ส่ง";
    }else if($evi_1 == 1){
        $ev_1 = "ส่งแล้ว";
    }

    if($evi_2 == 0){
        $ev_2 = "ยังไม่ได้ส่ง";
    }else if($evi_2 == 1){
        $ev_2 = "ส่งแล้ว";
    }

    if($evi_3 == 0){
        $ev_3 = "ยังไม่ได้ส่ง";
    }else if($evi_3 == 1){
        $ev_3 = "ส่งแล้ว";
    }

    if($evi_4 == 0){
        $ev_4 = "ยังไม่ได้ส่ง";
    }else if($evi_4 == 1){
        $ev_4 = "ส่งแล้ว";
    }

    if($evi_5 == 0){
        $ev_5 = "ยังไม่ได้ส่ง";
    }else if($evi_5 == 1){
        $ev_5 = "ส่งแล้ว";
    }

    if($evi_6 == 0){
        $ev_6 = "ยังไม่ได้ส่ง";
    }else if($evi_6 == 1){
        $ev_6 = "ส่งแล้ว";
    }

    if($evi_7 == 0){
        $ev_7 = "ยังไม่ได้ส่ง";
    }else if($evi_7 == 1){
        $ev_7 = "ส่งแล้ว";
    }

    if($evi_10 == 0){
        $ev_10 = "ยังไม่ได้ส่ง";
    }else if($evi_10 == 1){
        $ev_10 = "ส่งแล้ว";
    }

    if($evi_11 == 0){
        $ev_11 = "ยังไม่ได้ส่ง";
    }else if($evi_11 == 1){
        $ev_11 = "ส่งแล้ว";
    }

    $sibling_total      = $row["sibling_total"];
    $sibling_o_bro      = $row["sibling_o_bro"];
    $sibling_l_bro      = $row["sibling_l_bro"];
    $sibling_o_sis      = $row["sibling_o_sis"];
    $sibling_l_sis      = $row["sibling_l_sis"];
    $newstut_status     = $row["newstut_status"];

    $wat_name           = $row["wat_name"];
    $wat_tambol         = $row["wat_tambol"];
    $wat_district       = $row["wat_district"];
    $wat_provience      = $row["wat_provience"];
    $wat_postal         = $row["wat_postal"];
    $wat_abbot          = $row["wat_abbot"];
    $wat_tel            = $row["wat_tel"];

    $typer_firstname    = $row["typer_firstname"];
    $typer_lastname     = $row["typer_lastname"];

    $stu_b_fname        = $row["stu_b_fname"];
    $stu_b_lname        = $row["stu_b_lname"];

    $class_name         = $row["class_name"];

    $par_status_des     = $row["par_status_des"];

    $parent_f_name      = $row["parent_f_name"];
    $parent_f_income    = $row["parent_f_income"];
    $parent_f_tel       = $row["parent_f_tel"];
    $FOCC               = $row["FOCC"];

    $parent_m_name      = $row["parent_m_name"];
    $parent_m_income    = $row["parent_m_income"];
    $parent_m_tel       = $row["parent_m_tel"];
    $MOCC               = $row["MOCC"];

    $naktham_year          = $row["pali_year"];
    $pa_sco_name        = $row["pa_sco_name"];
    $pa_tambol          = $row["pa_tambol"];
    $pa_district        = $row["pa_district"];
    $pa_provience       = $row["pa_provience"];
    $pali_l_name        = $row["pali_l_name"];

    $naktham_year       = $row["naktham_year"];
    $naktham_l_name     = $row["naktham_l_name"];
    $na_sco_name        = $row["na_sco_name"];
    $na_tambol          = $row["na_tambol"];
    $na_district        = $row["na_district"];
    $sna_provience      = $row["sna_provience"];

    $guardian_name      = $row["guardian_name"];
    $guardian_income    = $row["guardian_income"];
    $guardian_tel       = $row["guardian_tel"];
    $guardian_nid       = $row["guardian_national_id"];
    $guardian_relation  = $row["guardian_relation"];
    $occupation_name    = $row["occupation_name"];

    $edu_class          = $row["edu_class"];
    $edu_sco_name       = $row["edu_sco_name"];
    $edu_tambol         = $row["edu_tambol"];
    $edu_district       = $row["edu_district"];
    $edu_provience      = $row["edu_provience"];
    $best_sub           = $row["best_sub"];
    $worst_sub          = $row["worst_sub"];
}else{
    $newstu_id = "-";
    $newstu_titlename = "-";
    $newstu_name = "-";
    $newstu_lastname = "-";
    $newstu_chaya = "-";
    $newstu_petname = "-";
    $newstu_dob = "-";
    $newstu_bgroup = "-";
    $newstu_weight = "-";
    $newstu_height = "-";
    $newstu_nationalid = "-";
    $newstu_houseno = "-";
    $newstu_photo = "-";
    $created_at = "-";
    $address_no = "-";
    $address_moo = "-";
    $address_house = "-";
    $address_tambol = "-";
    $address_district = "-";
    $address_provience = "-";
    $address_zip = "-";
    $address_tel = "-";

    $evi_1 = "-";
    $evi_2 = "-";
    $evi_3 = "-";
    $evi_4 = "-";
    $evi_5 = "-";
    $evi_6 = "-";
    $evi_7 = "-";
    $evi_8 = "-";
    $evi_9 = "-";
    $evi_10 = "-";
    $evi_11 = "-";
    $evi_12 = "-";

    $sibling_total = "-";
    $sibling_o_bro = "-";
    $sibling_l_bro = "-";
    $sibling_o_sis = "-";
    $sibling_l_sis = "-";
    $newstut_status = "-";
    $wat_name = "-";
    $wat_tambol = "-";
    $wat_district = "-";
    $wat_provience = "-";
    $wat_postal = "-";
    $wat_abbot = "-";
    $wat_tel = "-";
    $typer_firstname = "------------------------";
    $typer_lastname = "-";
    $stu_b_fname = "-";
    $stu_b_lname = "-";
    $class_name = "-";
    $parent_f_name = "-";
    $parent_f_income = "-";
    $parent_f_tel = "-";
    $FOCC = "-";
    $parent_m_name = "-";
    $parent_m_income = "-";
    $parent_m_tel = "-";
    $par_status_des = "-";
    $MOCC = "-";
    $pali_year = "-";
    $pa_sco_name = "-";
    $pa_tambol = "-";
    $pa_district = "-";
    $pa_provience = "-";
    $pali_l_name = "-";
    $naktham_year = "-";
    $naktham_l_name = "-";
    $na_sco_name = "-";
    $na_tambol = "-";
    $na_district = "-";
    $sna_provience = "-";
    $guardian_name = "-";
    $guardian_income = "-";
    $guardian_tel = "-";
    $guardian_national_id = "-";
    $guardian_relation = "-";
    $occupation_name = "-";
    $edu_class = "-";
    $edu_sco_name = "-";
    $edu_tambol = "-";
    $edu_district = "-";
    $edu_provience = "-";
    $best_sub = "-";
    $worst_sub = "-";
}