<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            <div class="card-header bg-white">
                User Grid
            </div>
            <div class="card-block m-t-35" id="user_body">
                <div class="table-toolbar">
                    <div class="btn-group">
                        <a href="admission.php?source=add" id="editable_table_new" class=" btn btn-default"> Add student  <i class="fa fa-plus"></i> </a> &nbsp; &nbsp;
                        <a href="includes/_excel.php" class=" btn btn-danger"> Excel  <i class="fa fa-file-excel-o"></i> </a>
                    </div>
                    <div class="btn-group float-right users_grid_tools">
                        <div class="tools"></div>
                    </div>
                </div>
                <div>
                    <div>
                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" id="editable_table" role="grid">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc wid-20" tabindex="0" rowspan="1" colspan="1">ที่</th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">ชื่อ</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">ชันที่สมัคร</th>
                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">จังหวัด</th>
                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">วันที่มาสมัคร</th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $sql= "SELECT
                                            newstudent.newstu_id,
                                            CONCAT(newstudent.newstu_titlename, newstudent.newstu_name,' ', newstudent.newstu_lastname,' ', newstudent.newstu_chaya ) AS `name`,
                                            newstudent.created_at,
                                            class.class_name,
                                            address.address_provience 
                                        FROM
                                            newstudent
                                            INNER JOIN class ON newstudent.newstu_admit_class = class.class_id
                                            INNER JOIN address ON newstudent.newstu_address_id = address.address_id";
                                        $result = mysqli_query($connection, $sql);
                                        if (mysqli_num_rows($result) > 0){
                                            $i = 1;
                                            while($row = mysqli_fetch_assoc($result)) {
                                                $newstu_id              = $row['newstu_id'];
                                                $name                   = $row['name'];
                                                $class_name            = $row['class_name'];
                                                $address_provience        = $row['address_provience'];
                                                $created_at             = $row['created_at'];
                            ?>
                                <tr role="row" class="even">
                                    <td class="sorting_1"><?php echo $i++; ?></td>
                                    <td><?php echo $name; ?></td>
                                    <td><?php echo $class_name; ?></td>
                                    <td class="center"><?php echo $address_provience; ?></td>
                                    <td class="center"><?php echo $created_at; ?></td>
                                    <td>
                                        <a href="admission.php?source=profile&newstu=<?=$newstu_id?>" data-toggle="tooltip" data-placement="top" title="View User">
                                            <i class="fa fa-eye text-success"></i>
                                        </a>&nbsp; &nbsp;
                                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="admission.php?source=edit">
                                            <i class="fa fa-pencil text-warning"></i>
                                        </a>&nbsp; &nbsp;
                                        <!-- <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete_user.html">
                                            <i class="fa fa-trash text-danger"></i>
                                        </a>&nbsp; &nbsp; -->
                                        <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="PDF" href="includes/_pdf_profile.php?newstu=<?=$newstu_id?>">
                                            <i class="fa fa-file text-danger"></i>
                                        </a>
                                    
                                    </td>
                                </tr>
                                <?php       }
                                        }else{
                                            echo " O results";
                                        }
                                        mysqli_close($connection);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>
