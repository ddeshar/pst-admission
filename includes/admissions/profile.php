<div class="outer">
    <div class="inner bg-container">
        <div class="card">
            <div class="card-block">
                <?php 

                    $students = $_GET["newstu"];
                    
                    $sql = "SELECT * FROM `student` WHERE newstu_id = '$students'";
                    $query = mysqli_query($connection, $sql);

                    if (mysqli_num_rows($query) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($query)) {
                ?>
                <div class="row">
                    <div class="col-lg-4 m-t-35">
                        <div class="text-center">
                            <div class="form-group">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumb_zoom zoom admin_img_width">
                                        <?php 
                                            $photo = $row["newstu_photo"];
                                            if($photo > 0){
                                                $test = $photo;
                                            }else{
                                                $test = "default.jpg";
                                            }
                                        ?>
                                            <img src="<?php echo './assets/img/newstu/' . $test;?>" width="150" height="auto" alt="<?php echo $row["newstu_titlename"];?><?php echo $row["newstu_name"];?> <?php echo $row["newstu_lastname"];?>">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumb_zoom zoom admin_img_width"></div>
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="PDF" href="includes/_pdf_profile.php?newstu=<?=$row["newstu_id"]?>">
                                            <i class="fa fa-file text-danger"></i> PDF
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 m-t-25">
                        <div>
                            <ul class="nav nav-inline view_user_nav_padding">
                                <li class="nav-item card_nav_hover">
                                    <a class="nav-link active" href="#user" id="home-tab"
                                        data-toggle="tab" aria-expanded="true">ประวัติพื้นฐาน</a>
                                </li>
                                <li class="nav-item card_nav_hover">
                                    <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">ประวัติทางการศึกษา</a>
                                </li>
                                <li class="nav-item card_nav_hover">
                                    <a class="nav-link" href="#tab3"  id="followers" data-toggle="tab">หลักฐานในการสมัครเรียน</a>
                                </li>
                            </ul>
                            <div id="clothing-nav-content" class="tab-content m-t-10">
                                <div role="tabpanel" class="tab-pane fade show active" id="user">
                                    <table class="table" id="users">
                                        <tr>
                                            <td>ชื่อ</td>
                                            <td><?php echo $row["newstu_titlename"] .''. $row["newstu_name"] .' '. $row["newstu_lastname"] .' '. $row["newstu_chaya"];?></td>
                                        </tr>
                                        <tr>
                                            <td>ชื่อเล่น</td>
                                            <td><?php echo $row["newstu_petname"];?></td>
                                        </tr>
                                        <tr>
                                            <td>เกิดวันที่</td>
                                            <td><?php echo $row["newstu_dob"];?></td>
                                        </tr>
                                        <tr>
                                            <td>หมู่โลหิต </td>
                                            <td><?php echo $row["newstu_bgroup"];?></td>
                                        </tr>
                                        <tr>
                                            <td>ปัจจุบัน น้ำหนัก</td>
                                            <td><?php echo $row["newstu_weight"];?>กิโลกรัม</td>
                                        </tr>
                                        <tr>
                                            <td>ส่วนสูง</td>
                                            <td><?php echo $row["newstu_height"];?>เซนติเมตร</td>
                                        </tr>
                                        <tr>
                                            <td>เลขประจำตัวประชาชน</td>
                                            <td><?php echo $row["newstu_nationalid"];?></td>
                                        </tr>
                                        <tr>
                                            <td>เลขรหัสประจำบ้าน </td>
                                            <td><?php echo $row["newstu_houseno"];?></td>
                                        </tr>
                                        <tr>
                                            <td>ที่อยู่ตามทะเบียนบ้าน </td>
                                            <td><?php echo $row["address_no"].' '.$row["address_moo"].' '.$row["address_house"].' ต.'.$row["address_tambol"].' อ. '.$row["address_district"].' จ. '.$row["address_provience"].' '.$row["address_zip"].' โทร '.$row["address_tel"];?></td>
                                        </tr>
                                        <tr>
                                            <td>บิดาผู้ให้กำเนิด</td>
                                            <td><?php echo $row["parent_f_name"].' <b>อาชีพ</b> '.$row["FOCC"].' <b>รายได้ต่อเดือน</b> '.$row["parent_f_income"].' <b>โทร</b> '.$row["parent_f_tel"];?></td>
                                        </tr>
                                        <tr>
                                            <td>มารดาผู้ให้กำเนิด</td>
                                            <td><?php echo $row["parent_m_name"].' <b>อาชีพ</b> '.$row["MOCC"].' <b>รายได้ต่อเดือน</b> '.$row["parent_m_income"].' <b>โทร</b> '.$row["parent_m_tel"];?></td>
                                        </tr>
                                        <tr>
                                            <td>สถานภาพบิดา-มารดา</td>
                                            <td><?php echo $row["par_status_des"];?></td>
                                        </tr>
                                        <tr>
                                            <td>จำนวนพี่น้องทั้งหมด</td>
                                            <td>จำนวนพี่น้องทั้งหมด <?php echo $row["sibling_total"].' คน | พี่ชาย '.$row["sibling_o_bro"].'คน | น้องชาย'.$row["sibling_l_bro"].'คน | พี่สาว'.$row["sibling_o_sis"].'คน | น้องสาว'.$row["sibling_l_sis"].'คน | นักเรียนเป็นบุตรคนที่ '.$row["newstut_status"];?></td>
                                        </tr>
                                        <tr>
                                            <td>ผู้ปกครอง</td>
                                            <td><?php echo $row["guardian_name"].' '.$row["guardian_income"].' '.$row["guardian_tel"].' '.$row["guardian_national_id"].' '.$row["guardian_relation"].' '.$row["occupation_name"];?></td>
                                        </tr>
                                        <tr>
                                            <td>ปัจจุบันสังกัดวัด</td>
                                            <td><?php echo $row["wat_name"].' ต.'.$row["wat_tambol"].' อ.'.$row["wat_district"].' จ.'.$row["wat_provience"].' '.$row["wat_postal"].' เจ้าอาวาส '.$row["wat_abbot"].' โทร '.$row["wat_tel"];?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab2">
                                    <table class="table" id="users">
                                        <tr>
                                            <td>การศึกษาชั้นสุดท้าย </td>
                                            <td><?php echo $row["edu_class"].' '.$row["edu_sco_name"].' '.$row["edu_tambol"].' '.$row["edu_district"].' '.$row["edu_provience"];?></td>
                                        </tr>
                                        <tr>
                                            <td>นักธรรม</td>
                                            <td><?php echo $row["naktham_l_name"].' '.$row["na_sco_name"].' '.$row["na_tambol"].' '.$row["na_district"].' '.$row["na_provience"].' '.$row["naktham_year"];?></td>
                                        </tr>
                                        <tr>
                                            <td>ประโยค</td>
                                            <td><?php echo $row["pali_l_name"].' '.$row["pa_soc_name"].' '.$row["pa_tambol"].' '.$row["na_district"].' '.$row["pa_provience"].' '.$row["pali_year"];?></td>
                                        </tr>
                                        <tr>
                                            <td>วิชาที่ถนัดเรียน </td>
                                            <td><?php echo $row["best_sub"];?></td>
                                        </tr>
                                        <tr>
                                            <td>วิชาที่ไม่ถนัด</td>
                                            <td><?php echo $row["worst_sub"];?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab3">
                                    <table class="table" id="users">
                                        <tr>
                                            <td>วุฒิการศึกษา (ปพ.1)</td>
                                            <td><?php
                                                echo $row["evi_1"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>ใบประกาศนียบัตรจบการศึกษา (ปพ.2)</td>
                                            <td><?php
                                                echo $row["evi_2"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>ใบรับรองผลการศึกษา (ปพ.7)</td>
                                            <td><?php
                                                echo $row["evi_3"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>สำเนาทะเบียนบ้านบิดาผู้ให้กำเนิด</td>
                                            <td><?php
                                                echo $row["evi_4"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>สำเนาหนังสือสุทธิแสดงสังกัดวัด</td>
                                            <td><?php
                                                echo $row["evi_5"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>หนังสือรับรองจากวัดต้นสังกัด</td>
                                            <td><?php
                                                echo $row["evi_6"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>สำเนาทะเบียนบ้านนักเรียน</td>
                                            <td><?php
                                                echo $row["evi_7"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>สำเนาทะเบียนบ้านมารดาผู้ให้กำเนิด</td>
                                            <td><?php
                                                echo $row["evi_10"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>สำเนาใบเปลี่ยนชื่อ-นามสกุล</td>
                                            <td><?php
                                                echo $row["evi_11"];
                                            ?></td>
                                        </tr>
                                        <tr>
                                            <td>สำเนาใบประกาศนียบัตร นักธรรมชั้น</td>
                                            <td><?php echo $row["evi_8"];?></td>
                                        </tr>
                                        <tr>
                                            <td>สำเนาใบประกาศนียบัตร บาลีประโยค</td>
                                            <td><?php echo $row["evi_9"];?></td>
                                        </tr>
                                        <tr>
                                            <td>หลักฐานอื่น ๆ (ระบุ)</td>
                                            <td><?php echo $row["evi_12"];?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                            }
                        } else {
                            echo "0 results";
                        }
                    ?>
            </div>
        </div>
    </div>
</div>




