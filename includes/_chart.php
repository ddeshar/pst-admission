<?php
    $query =   "SELECT class.class_name As class, Count(newstudent.newstu_admit_class) AS total
                FROM newstudent
                INNER JOIN class ON newstudent.newstu_admit_class = class.class_id
                GROUP BY class.class_name";
                $result = mysqli_query($connection, $query);

    $query1 =   "SELECT address.address_provience AS provience, Count(newstudent.newstu_id) AS stu
                FROM newstudent
                INNER JOIN address ON newstudent.newstu_address_id = address.address_id
                GROUP BY address.address_provience
                ORDER BY stu DESC";
                $result1 = mysqli_query($connection, $query1);

    $wat =   "SELECT wats.wat_name as wat, Count(newstudent.newstu_id) As stud
            FROM newstudent
            INNER JOIN wats ON newstudent.newstu_wat_id = wats.wat_id
            GROUP BY wats.wat_name
            ORDER BY stud DESC";
            $wats = mysqli_query($connection, $wat);