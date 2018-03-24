<div class="row">
    <div class="col-lg-3 input_field_sections">
        <h5>เรียนต่อ</h5>
        <select class="form-control" name="admit_class" tabindex="7">
            <?php 
                $admit_query = "SELECT * FROM class";
                $query_admit = mysqli_query($connection, $admit_query);
                if(mysqli_num_rows($query_admit) > 0){
                    while($admit = mysqli_fetch_assoc($query_admit)){
            ?>
            <option value="<?php echo $admit["class_id"] ?>"><?php echo $admit["class_name"] ?></option>
            <?php
                    }
                }
            ?>    
        </select>
    </div>
    <br>
    <div class="col-lg-3 input_field_sections">
        <h5>ชื่อหนำหน้า</h5>
            <input name="newstu_titlename" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ชื่อ</h5>
            <input name="newstu_name" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>นามสกุล</h5>
            <input name="newstu_lastname" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ฉายา</h5>
            <input name="newstu_chaya" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ชื่อเล่น</h5>
            <input name="newstu_petname" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>เลขประจำตัวประชาชน</h5>
            <input name="newstu_nationalid" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ว/ด/ป/เกิด</h5>
            <input name="newstu_dob" value="" placeholder="" type="date" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 input_field_sections">
        <h5>หมู่โลหิต</h5>
        <select class="form-control" name="newstu_bgroup">
            <option value="-"></option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option> 
        </select>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ปัจจุบันน้ำหนัก กิโลกรัม</h5>
            <input name="newstu_weight" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ส่วนสูง เซนติเมตร</h5>
            <input name="newstu_height" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>เลขรหัสประจำบ้าน </h5>
            <input name="newstu_houseno" value="" placeholder="" type="text" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 input_field_sections">
        <h5>เลขที่</h5>
            <input name="address_no" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>หมู่</h5>
            <input name="address_moo" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>บ้าน</h5>
            <input name="address_house" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ตำบล</h5>
            <input name="address_tambol" value="" id="address_tambol" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>อำเภอ</h5>
            <input name="address_district" value="" id="address_district" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>จังหวัด</h5>
            <input name="address_provience" value="" id="address_provience" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ไปรษณีย์</h5>
            <input name="address_zip" value="" id="address_zip" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>โทรศัพท์นักเรียน</h5>
            <input name="address_tel" value="" placeholder="" type="text" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-10">
        <div class="row">
            <div class="col-lg-3 input_field_sections">
                <h5>บิดาผู้ให้กำเนิด ชื่อ-สกุล</h5>
                    <input name="parent_f_name" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5>อาชีพ</h5>
                <select class="form-control" name="parent_f_occupation" tabindex="7">
                    <?php 
                        $parent_f_query = "SELECT * FROM occupations";
                        $query_parent_f = mysqli_query($connection, $parent_f_query);
                        if(mysqli_num_rows($query_parent_f) > 0){
                            while($parent_f = mysqli_fetch_assoc($query_parent_f)){
                    ?>
                    <option value="<?php echo $parent_f["occupation_id"] ?>"><?php echo $parent_f["occupation_name"] ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
                    <!-- <input name="parent_f_occupation" value="" placeholder="" type="text" class="form-control "/> -->
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5>รายได้ต่อเดือน</h5>
                    <input name="parent_f_income" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5>โทร.</h5>
                    <input name="parent_f_tel" value="" placeholder="" type="text" class="form-control "/>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 input_field_sections">
                <h5>มารดาผู้ให้กำเนิด ชื่อ-สกุล</h5>
                    <input name="parent_m_name" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5>อาชีพ</h5>
                <select class="form-control" name="parent_m_occupation" tabindex="7">
                    <?php 
                        $parent_m_query = "SELECT * FROM occupations";
                        $query_parent_m = mysqli_query($connection, $parent_m_query);
                        if(mysqli_num_rows($query_parent_m) > 0){
                            while($parent_m = mysqli_fetch_assoc($query_parent_m)){
                    ?>
                    <option value="<?php echo $parent_m["occupation_id"] ?>"><?php echo $parent_m["occupation_name"] ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5>รายได้ต่อเดือน</h5>
                    <input name="parent_m_income" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5>โทร.</h5>
                    <input name="parent_m_tel" value="" placeholder="" type="text" class="form-control "/>
            </div>
        </div>
    </div>

    <div class="col-lg-2">

        <div class="row" >
            <div class="col-lg-12 input_field_sections">                                
                <h5 class="checkbox_header_bottom">สถานภาพบิดา-มารดา</h5>
                <div class="form-group custom-controls-stacked">
                    <?php
                        $parent_query = "SELECT * FROM parents_status";
                        $query_parent = mysqli_query($connection, $parent_query);
                        if(mysqli_num_rows($query_parent) > 0){
                            while($parents = mysqli_fetch_assoc($query_parent)){ ?>
                                <label class="custom-control custom-radio">
                                    <input type="radio" value="<?php echo $parents["par_status_id"] ?>" name="parent_status" class="custom-control-input">
                                    <span class="custom-control-indicator custom_checkbox_default"></span>
                                    <span class="custom-control-description text-default"><?php echo $parents["par_status_des"] ?> </span>
                                </label>
                        <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

        <div class="row">
            <div class="col-lg-2 input_field_sections">
                <h5>จำนวนพี่น้องทั้งหมด</h5>
                    <input name="sibling_total" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>พี่ชาย</h5>
                    <input name="sibling_o_bro" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>น้องชาย</h5>
                    <input name="sibling_l_bro" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>พี่สาว</h5>
                    <input name="sibling_o_sis" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>น้องสาว</h5>
                    <input name="sibling_l_sis" value="" placeholder="" type="text" class="form-control "/>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>นักเรียนเป็นบุตรคนที่</h5>
                    <input name="newstut_status" value="" placeholder="" type="text" class="form-control "/>
            </div>
        </div>

<div class="row">
    <div class="col-lg-2 input_field_sections">
        <h5>ชื่อ-สกุลผู้ปกครอง</h5>
            <input name="guardian_name" value="" placeholder="" type="text" class="form-control rounded_input"/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>อาชีพ</h5>
        <select class="form-control" name="guardian_occupation" tabindex="7">
            <?php 
                $guardian_query = "SELECT * FROM occupations";
                $query_guardian = mysqli_query($connection, $guardian_query);
                if(mysqli_num_rows($query_guardian) > 0){
                    while($guardian = mysqli_fetch_assoc($query_guardian)){
            ?>
            <option value="<?php echo $guardian["occupation_id"] ?>"><?php echo $guardian["occupation_name"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>รายได้ต่อเดือน</h5>
            <input name="guardian_income" value="" placeholder="" type="text" class="form-control rounded_input"/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>โทร</h5>
            <input name="guardian_tel" value="" placeholder="" type="text" class="form-control rounded_input"/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>เลขประจำตัวประชาชน</h5>
            <input name="guardian_national_id" value="" placeholder="" type="text" class="form-control rounded_input"/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>เกี่ยวข้องกับนักเรียน เป็น  </h5>
            <input name="guardian_relation" value="" placeholder="" type="text" class="form-control rounded_input"/>
    </div>
</div>


<div class="row">
    <div class="col-lg-3 input_field_sections">
        <h5>ชื่อวัด</h5>
            <input name="wat_name" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>นามเจ้าอาวาส</h5>
            <input name="wat_abbot" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>โทรศัพท์</h5>
            <input name="wat_tel" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>ตำบล</h5>
            <input name="wat_tambol" value="" id="wat_tambol" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>อำเภอ</h5>
            <input name="wat_district" value="" id="wat_district" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>จังหวัด</h5>
            <input name="wat_provience" value="" id="wat_provience" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>รหัสไปรษณีย์</h5>
            <input name="wat_postal" value="" id="wat_postal" placeholder="" type="text" class="form-control "/>
    </div>

</div>