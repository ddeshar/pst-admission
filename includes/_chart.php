<?php
    $query =   "SELECT class.class_name As class, Count(newstudent.newstu_admit_class) AS total
                FROM newstudent
                INNER JOIN class ON newstudent.newstu_admit_class = class.class_id
                GROUP BY class.class_name";
                $result = mysqli_query($connection, $query);

    $query1 =   "SELECT
                    address.address_provience AS provience,
                    count( CASE WHEN newstu_admit_class = '2' THEN 1 ELSE NULL END ) AS one,
                    count( CASE WHEN newstu_admit_class = '3' THEN 1 ELSE NULL END ) AS two,
                    count( CASE WHEN newstu_admit_class = '4' THEN 1 ELSE NULL END ) AS three,
                    count( CASE WHEN newstu_admit_class = '5' THEN 1 ELSE NULL END ) AS four,
                    count( CASE WHEN newstu_admit_class = '6' THEN 1 ELSE NULL END ) AS five,
                    count( CASE WHEN newstu_admit_class = '7' THEN 1 ELSE NULL END ) AS six,
                    Count( newstudent.newstu_id ) AS stu 
                FROM newstudent INNER JOIN address ON newstudent.newstu_address_id = address.address_id 
                GROUP BY address.address_provience
                ORDER BY stu DESC";
                $result1 = mysqli_query($connection, $query1);

    $wat =   "SELECT
                    wats.wat_name AS wat,
                    count( CASE WHEN newstu_admit_class = '2' THEN 1 ELSE NULL END ) AS one,
                    count( CASE WHEN newstu_admit_class = '3' THEN 1 ELSE NULL END ) AS two,
                    count( CASE WHEN newstu_admit_class = '4' THEN 1 ELSE NULL END ) AS three,
                    count( CASE WHEN newstu_admit_class = '5' THEN 1 ELSE NULL END ) AS four,
                    count( CASE WHEN newstu_admit_class = '6' THEN 1 ELSE NULL END ) AS five,
                    count( CASE WHEN newstu_admit_class = '7' THEN 1 ELSE NULL END ) AS six,
                    Count( newstudent.newstu_id ) AS stud 
                FROM newstudent INNER JOIN wats ON newstudent.newstu_wat_id = wats.wat_id 
                GROUP BY wats.wat_name 
                ORDER BY stud DESC";
            $wats = mysqli_query($connection, $wat);