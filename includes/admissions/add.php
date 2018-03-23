<?php
    if(isset($_POST['create_post'])) {
        var_dump($_POST);

        $address_no                 = mysqli_real_escape_string($connection, $_POST['address_no']);
        $address_moo                = mysqli_real_escape_string($connection, $_POST['address_moo']);
        $address_house              = mysqli_real_escape_string($connection, $_POST['address_house']);
        $address_tambol             = mysqli_real_escape_string($connection, $_POST['address_tambol']);
        $address_district           = mysqli_real_escape_string($connection, $_POST['address_district']);
        $address_provience          = mysqli_real_escape_string($connection, $_POST['address_provience']);
        $address_zip                = mysqli_real_escape_string($connection, $_POST['address_zip']);
        $address_tel                = mysqli_real_escape_string($connection, $_POST['address_tel']);

        $address ="INSERT INTO address (address_no, address_moo,address_house, address_tambol, address_district, address_provience, address_zip, address_tel ) 
        VALUES ('$address_no', '$address_moo', '$address_house', '$address_tambol', '$address_district', '$address_provience', '$address_zip', '$address_tel')";

        if (mysqli_query($connection, $address)) {
            $last_address = mysqli_insert_id($connection);
            echo $address . "<br>";            
        } else {
            echo "Error: " . $address . "<br>" . mysqli_error($connection);
        }

        $parent_f_name              = mysqli_real_escape_string($connection, $_POST['parent_f_name']);
        $parent_f_occupation        = mysqli_real_escape_string($connection, $_POST['parent_f_occupation']);
        $parent_f_income            = mysqli_real_escape_string($connection, $_POST['parent_f_income']);
        $parent_f_tel               = mysqli_real_escape_string($connection, $_POST['parent_f_tel']);
        $parent_m_name              = mysqli_real_escape_string($connection, $_POST['parent_m_name']);
        $parent_m_occupation        = mysqli_real_escape_string($connection, $_POST['parent_m_occupation']);
        $parent_m_income            = mysqli_real_escape_string($connection, $_POST['parent_m_income']);
        $parent_m_tel               = mysqli_real_escape_string($connection, $_POST['parent_m_tel']);
        $parent_status              = mysqli_real_escape_string($connection, $_POST['parent_status']);

        $parents="INSERT INTO parents (`parent_f_name`, `parent_f_income`, `parent_f_tel`, `parent_m_name`, `parent_m_income`, `parent_m_tel`, `parent_f_occupation`, `parent_m_occupation`, `parents_status`) 
        VALUES ('$parent_f_name', '$parent_f_income', '$parent_f_tel', '$parent_m_name', '$parent_m_income', '$parent_m_tel', '$parent_f_occupation', '$parent_m_occupation', '$parent_status')";

        if (mysqli_query($connection, $parents)) {
            $last_parents = mysqli_insert_id($connection);
            echo $parents . "<br>";            
        } else {
            echo "Error: " . $parents . "<br>" . mysqli_error($connection);
        }

        $sibling_total              = mysqli_real_escape_string($connection, $_POST['sibling_total']);
        $sibling_o_bro              = mysqli_real_escape_string($connection, $_POST['sibling_o_bro']);
        $sibling_l_bro              = mysqli_real_escape_string($connection, $_POST['sibling_l_bro']);
        $sibling_o_sis              = mysqli_real_escape_string($connection, $_POST['sibling_o_sis']);
        $sibling_l_sis              = mysqli_real_escape_string($connection, $_POST['sibling_l_sis']);
        $newstut_status             = mysqli_real_escape_string($connection, $_POST['newstut_status']);
        
        $siblings="INSERT INTO siblings (sibling_total, sibling_o_bro, sibling_l_bro, sibling_o_sis, sibling_l_sis, newstut_status ) 
        VALUES ('$sibling_total', '$sibling_o_bro', '$sibling_l_bro', '$sibling_o_sis', '$sibling_l_sis', '$newstut_status')";

        if (mysqli_query($connection, $siblings)) {
            $last_siblings = mysqli_insert_id($connection);
            echo $siblings . "<br>";            
        } else {
            echo "Error: " . $siblings . "<br>" . mysqli_error($connection);
        }
       
        $school_name                = mysqli_real_escape_string($connection, $_POST['school_name']);
        $school_tambol              = mysqli_real_escape_string($connection, $_POST['school_tambol']);
        $school_district            = mysqli_real_escape_string($connection, $_POST['school_district']);
        $school_provience           = mysqli_real_escape_string($connection, $_POST['school_provience']);

        $school="INSERT INTO school (school_name, school_tambol, school_district, school_provience ) 
        VALUES ('$school_name', '$school_tambol', '$school_district', '$school_provience')";

        if (mysqli_query($connection, $school)) {
            $last_school = mysqli_insert_id($connection);
            // echo $school . "<br>";            
        } else {
            echo "Error: " . $school . "<br>" . mysqli_error($connection);
        }      

        $education_grade            = mysqli_real_escape_string($connection, $_POST['education_grade']);
        $education_school_id        = $last_school;

        $education="INSERT INTO education (education_grade, education_school_id) 
        VALUES ('$education_grade', '$education_school_id')";

        if (mysqli_query($connection, $education)) {
            $last_education = mysqli_insert_id($connection);
            echo $education . "<br>";            
        } else {
            echo "Error: " . $education . "<br>" . mysqli_error($connection);
        }    

        $naktham_school             = mysqli_real_escape_string($connection, $_POST['naktham_school']);
        $naktham_tambol             = mysqli_real_escape_string($connection, $_POST['naktham_tambol']);
        $naktham_district           = mysqli_real_escape_string($connection, $_POST['naktham_district']);
        $naktham_provience          = mysqli_real_escape_string($connection, $_POST['naktham_provience']);
        $naktham_year               = mysqli_real_escape_string($connection, $_POST['naktham_year']);
        $naktham_ref_id             = mysqli_real_escape_string($connection, $_POST['naktham_ref_id']);
        $naktham_level              = mysqli_real_escape_string($connection, $_POST['naktham_level']);

        $naktham="INSERT INTO naktham (naktham_school,naktham_tambol, naktham_district, naktham_provience,  naktham_year, naktham_ref_id, naktham_level) 
        VALUES ('$naktham_school', '$naktham_tambol', '$naktham_district', '$naktham_provience', '$naktham_year','$naktham_ref_id', '$naktham_level')";

        if (mysqli_query($connection, $naktham)) {
            $last_naktham = mysqli_insert_id($connection);
            echo $naktham . "<br>";            
        } else {
            echo "Error: " . $naktham . "<br>" . mysqli_error($connection);
        }       

        $pali_school                = mysqli_real_escape_string($connection, $_POST['pali_school']);
        $pali_tambol                = mysqli_real_escape_string($connection, $_POST['pali_tambol']);
        $pali_district              = mysqli_real_escape_string($connection, $_POST['pali_district']);
        $pali_provience             = mysqli_real_escape_string($connection, $_POST['pali_provience']);
        $pali_year                  = mysqli_real_escape_string($connection, $_POST['pali_year']);
        $pali_ref_id                = mysqli_real_escape_string($connection, $_POST['pali_ref_id']);
        $pali_level                 = mysqli_real_escape_string($connection, $_POST['pali_level']);

        $pali="INSERT INTO pali (pali_school, pali_tambol, pali_district, pali_provience, pali_year, pali_ref_id ,pali_level) 
        VALUES ('$pali_school', '$pali_tambol', '$pali_district', '$pali_provience', '$pali_year', '$pali_ref_id', '$pali_level')";

        if (mysqli_query($connection, $pali)) {
            $last_pali = mysqli_insert_id($connection);
            echo $pali . "<br>";            
        } else {
            echo "Error: " . $pali . "<br>" . mysqli_error($connection);
        }      

        $guardian_name              = mysqli_real_escape_string($connection, $_POST['guardian_name']);
        $guardian_income            = mysqli_real_escape_string($connection, $_POST['guardian_income']);
        $guardian_tel               = mysqli_real_escape_string($connection, $_POST['guardian_tel']);
        $guardian_occupation        = mysqli_real_escape_string($connection, $_POST['guardian_occupation']);
        $guardian_national_id       = mysqli_real_escape_string($connection, $_POST['guardian_national_id']);
        $guardian_relation          = mysqli_real_escape_string($connection, $_POST['guardian_relation']);

        $guardians="INSERT INTO guardians (guardian_name, guardian_income, guardian_tel, guardian_occupation, guardian_national_id, guardian_relation )  
        VALUES ('$guardian_name', '$guardian_income', '$guardian_tel', '$guardian_occupation', '$guardian_national_id', '$guardian_relation')";

        if (mysqli_query($connection, $guardians)) {
            $last_guardians = mysqli_insert_id($connection);
            echo $guardians . "<br>";            
        } else {
            echo "Error: " . $guardians . "<br>" . mysqli_error($connection);
        }

        $wat_name                   = mysqli_real_escape_string($connection, $_POST['wat_name']);
        $wat_tambol                 = mysqli_real_escape_string($connection, $_POST['wat_tambol']);
        $wat_district               = mysqli_real_escape_string($connection, $_POST['wat_district']);
        $wat_provience              = mysqli_real_escape_string($connection, $_POST['wat_provience']);
        $wat_postal                 = mysqli_real_escape_string($connection, $_POST['wat_postal']);
        $wat_abbot                  = mysqli_real_escape_string($connection, $_POST['wat_abbot']);
        $wat_tel                    = mysqli_real_escape_string($connection, $_POST['wat_tel']);

        $wats="INSERT INTO wats (wat_name, wat_tambol, wat_district, wat_provience, wat_postal, wat_abbot, wat_tel ) 
        VALUES ('$wat_name', '$wat_tambol', '$wat_district', '$wat_provience', '$wat_postal', '$wat_abbot', '$wat_tel')";

        if (mysqli_query($connection, $wats)) {
            $last_wats = mysqli_insert_id($connection);
            echo $wats . "<br>";            
        } else {
            echo "Error: " . $wats . "<br>" . mysqli_error($connection);
        }

        $evi_1                      = mysqli_real_escape_string($connection, $_POST['evi_1']);
        $evi_2                      = mysqli_real_escape_string($connection, $_POST['evi_2']);
        $evi_3                      = mysqli_real_escape_string($connection, $_POST['evi_3']);
        $evi_4                      = mysqli_real_escape_string($connection, $_POST['evi_4']);
        $evi_5                      = mysqli_real_escape_string($connection, $_POST['evi_5']);
        $evi_6                      = mysqli_real_escape_string($connection, $_POST['evi_6']);
        $evi_7                      = mysqli_real_escape_string($connection, $_POST['evi_7']);
        $evi_8                      = mysqli_real_escape_string($connection, $_POST['evi_8']);
        $evi_9                      = mysqli_real_escape_string($connection, $_POST['evi_9']);
        $evi_10                     = mysqli_real_escape_string($connection, $_POST['evi_10']);
        $evi_11                     = mysqli_real_escape_string($connection, $_POST['evi_11']);
        $evi_12                     = mysqli_real_escape_string($connection, $_POST['evi_12']);

        $eviedence="INSERT INTO eviedence (evi_1, evi_2, evi_3, evi_4, evi_5, evi_6, evi_7, evi_8, evi_9, evi_10, evi_11, evi_12) 
        VALUES ('$evi_1', '$evi_2', '$evi_3', '$evi_4', '$evi_5', '$evi_6', '$evi_7', '$evi_8', '$evi_9', '$evi_10', '$evi_11', '$evi_12')";

        if (mysqli_query($connection, $eviedence)) {
            $last_eviedence = mysqli_insert_id($connection);
            echo $eviedence . "<br>";            
        } else {
            echo "Error: " . $eviedence . "<br>" . mysqli_error($connection);
        }

        $newstu_admit_class         = mysqli_real_escape_string($connection, $_POST['admit_class']);
        $newstu_titlename           = mysqli_real_escape_string($connection, $_POST['newstu_titlename']);
        $newstu_name                = mysqli_real_escape_string($connection, $_POST['newstu_name']);
        $newstu_lastname            = mysqli_real_escape_string($connection, $_POST['newstu_lastname']);
        $newstu_chaya               = mysqli_real_escape_string($connection, $_POST['newstu_chaya']);
        $newstu_petname             = mysqli_real_escape_string($connection, $_POST['newstu_petname']);
        $newstu_dob                 = mysqli_real_escape_string($connection, $_POST['newstu_dob']);
        $newstu_bgroup              = mysqli_real_escape_string($connection, $_POST['newstu_bgroup']);
        $newstu_weight              = mysqli_real_escape_string($connection, $_POST['newstu_weight']);
        $newstu_height              = mysqli_real_escape_string($connection, $_POST['newstu_height']);
        $newstu_nationalid          = mysqli_real_escape_string($connection, $_POST['newstu_nationalid']);
        $newstu_houseno             = mysqli_real_escape_string($connection, $_POST['newstu_houseno']);
        $newstu_best_sub            = mysqli_real_escape_string($connection, $_POST['newstu_best_sub']);
        $newstu_worst_sub           = mysqli_real_escape_string($connection, $_POST['newstu_worst_sub']);
        $newstu_get_notice_from     = ' ';
        $newstu_photo               = ' ';
        $newstu_user_id             = ' ';

        $newstudent="INSERT INTO `newstudent`(`newstu_titlename`, `newstu_name`, `newstu_lastname`, `newstu_chaya`, `newstu_petname`, `newstu_dob`, `newstu_bgroup`, `newstu_weight`, `newstu_height`, `newstu_nationalid`, `newstu_houseno`, `newstu_photo`, `newstu_get_notice_from`, `newstu_parents_id`, `newstu_sibling_id`, `newstu_wat_id`, `newstu_guardian_id`, `newstu_naktham_id`, `newstu_pali_id`, `newstu_education_id`, `newstu_address_id`, `newstu_evi_id`, `newstu_user_id`, `newstu_best_sub`, `newstu_worst_sub`, `created_at`, `newstu_admit_class`) 
        VALUES ('$newstu_titlename', '$newstu_name', '$newstu_lastname', '$newstu_chaya', '$newstu_petname', '$newstu_dob', '$newstu_bgroup', '$newstu_weight', '$newstu_height', '$newstu_nationalid', '$newstu_houseno', '$newstu_photo', '$newstu_get_notice_from', '$last_parents', '$last_siblings', '$last_wats','$last_guardians','$last_naktham','$last_pali','$last_education','$last_address','$last_eviedence','$newstu_user_id','$newstu_best_sub', '$newstu_worst_sub', NOW(), '$newstu_admit_class')";

        if (mysqli_query($connection, $newstudent)) {
            $last_newstudent = mysqli_insert_id($connection);
            echo $newstudent . "<br>";            
        } else {
            echo "Error: " . $newstudent . "<br>" . mysqli_error($connection);
        } 
        
        // //แยกระหว่างชื่อกับนามสกุล
        // $temp = explode(".", $_FILES["image"]["name"]);
        // //ให้เปลี่ยนชื่อตามเวลาโดยใช้ฟังก์ชั่น
        // $newfilename = round(microtime(true)) . '.' . end($temp);
        // // หลังจากที่เปลี่ยนชื่อแล้ว จะไปอัพโหลดที่ โฟเดอร์ asset/uploads
        // move_uploaded_file($_FILES["image"]["tmp_name"], "../images/" . $newfilename);
  
        // $query = "INSERT INTO posts(post_category_id, post_title,post_author, post_user, post_date,post_image,post_content,post_tags,post_status) ";
        // $query .= "VALUES({$post_category_id},'{$post_title}','{$post_author}','{$post_user}',now(),'{$newfilename}','{$post_content}','{$post_tags}', '{$post_status}') ";
        // $create_post_query = mysqli_query($connection, $query);
        // confirmQuery($create_post_query);
        // $the_post_id = mysqli_insert_id($connection);
        // echo "<p class='bg-success'>Post Created. <a href='../post.php?p_id={$the_post_id}'>View Post </a> or <a href='posts.php'>Edit More Posts</a></p>";
    }

include_once '_form.php'; ?>