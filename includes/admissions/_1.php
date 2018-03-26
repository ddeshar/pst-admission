<div class="row">
    <div class="col-lg-3 input_field_sections">
        <h5><code>เรียนต่อ * </code></h5>
        <select class="form-control" name="admit_class" tabindex="7" required>
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
        <h5><code>ชื่อหนำหน้า * </code> </h5>        
            <input name="newstu_titlename" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>ชื่อ *</code></h5>
            <input name="newstu_name" value="" placeholder="" type="text" class="form-control" required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>นามสกุล *</code></h5>
            <input name="newstu_lastname" value="" placeholder="" type="text" class="form-control " required/>
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
        <h5><code>เลขประจำตัวประชาชน *</code></h5>
            <input name="newstu_nationalid" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>ว/ด/ป/เกิด *</code></h5>
            <input name="newstu_dob" value="" placeholder="2037-12-21" type="text" class="form-control " required/>
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
        <h5><code>เลขที่ *</code></h5>
            <input name="address_no" value="" placeholder="" type="text" class="form-control " required/>
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
        <h5><code>ตำบล *</code></h5>
            <input name="address_tambol" value="" id="address_tambol" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>อำเภอ *</code></h5>
            <input name="address_district" value="" id="address_district" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>จังหวัด *</code></h5>
            <input name="address_provience" value="" id="address_provience" placeholder="" type="text" class="form-control " required/>
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
                <h5><code>บิดาผู้ให้กำเนิด ชื่อ-สกุล *</code></h5>
                    <input name="parent_f_name" value="" placeholder="" type="text" class="form-control " required/>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5><code>อาชีพ *</code></h5>
                <select class="form-control" name="parent_f_occupation" tabindex="7" required>
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
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5><code>รายได้ต่อเดือน *</code></h5>
                    <input name="parent_f_income" value="" placeholder="" type="text" class="form-control " required/>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5>โทร.</h5>
                    <input name="parent_f_tel" value="" placeholder="" type="text" class="form-control "/>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 input_field_sections">
                <h5><code>มารดาผู้ให้กำเนิด ชื่อ-สกุล *</code></h5>
                    <input name="parent_m_name" value="" placeholder="" type="text" class="form-control " required/>
            </div>
            <div class="col-lg-3 input_field_sections">
                <h5><code>อาชีพ *</code></h5>
                <select class="form-control" name="parent_m_occupation" tabindex="7" required>
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
                <h5><code>รายได้ต่อเดือน *</code></h5>
                    <input name="parent_m_income" value="" placeholder="" type="text" class="form-control " required/>
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
                <h5 class="checkbox_header_bottom"><code>สถานภาพบิดา-มารดา *</code></h5>
                <div class="form-group custom-controls-stacked">
                    <?php
                        $parent_query = "SELECT * FROM parents_status";
                        $query_parent = mysqli_query($connection, $parent_query);
                        if(mysqli_num_rows($query_parent) > 0){
                            while($parents = mysqli_fetch_assoc($query_parent)){ ?>
                                <label class="custom-control custom-radio">
                                    <input type="radio" value="<?php echo $parents["par_status_id"] ?>" name="parent_status" class="custom-control-input" required>
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
                    <select class="form-control" name="sibling_total" tabindex="7">
                        <option value='-'> - </option>
                        <?php 
                            for($i =0; $i <= 9 ;$i++){
                                $sibling_total = $i + 1;
                                echo '<option value='.$sibling_total.'>'.$sibling_total.'</option>';
                            }
                        ?>
                    </select>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>พี่ชาย</h5>
                    <select class="form-control" name="sibling_o_bro" tabindex="7" >
                        <option value='-'> - </option>
                        <?php 
                            for($i =0; $i <= 9 ;$i++){
                                $sibling_o_bro = $i + 1;
                                echo '<option value='.$sibling_o_bro.'>'.$sibling_o_bro.'</option>';
                            }
                        ?>
                    </select>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>น้องชาย</h5>
                    <select class="form-control" name="sibling_l_bro" tabindex="7" >
                        <option value='-'> - </option>
                        <?php 
                            for($i =0; $i <= 9 ;$i++){
                                $sibling_l_bro = $i + 1;
                                echo '<option value='.$sibling_l_bro.'>'.$sibling_l_bro.'</option>';
                            }
                        ?>
                    </select>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>พี่สาว</h5>
                    <select class="form-control" name="sibling_o_sis" tabindex="7" >
                        <option value='-'> - </option>
                        <?php 
                            for($i =0; $i <= 9 ;$i++){
                                $sibling_o_sis = $i + 1;
                                echo '<option value='.$sibling_o_sis.'>'.$sibling_o_sis.'</option>';
                            }
                        ?>
                    </select>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5>น้องสาว</h5>
                    <select class="form-control" name="sibling_l_sis" tabindex="7" >
                        <option value='-'> - </option>
                        <?php 
                            for($i =0; $i <= 9 ;$i++){
                                $sibling_l_sis = $i + 1;
                                echo '<option value='.$sibling_l_sis.'>'.$sibling_l_sis.'</option>';
                            }
                        ?>
                    </select>
            </div>
            <div class="col-lg-2 input_field_sections">
                <h5><code>นักเรียนเป็นบุตรคนที่ *</code></h5>
                    <select class="form-control" name="newstut_status" tabindex="7" required>
                        <!-- <option value=''> - </option> -->
                        <?php 
                            for($i =0; $i <= 9 ;$i++){
                                $newstut_status = $i + 1;
                                echo '<option value='.$newstut_status.'>'.$newstut_status.'</option>';
                            }
                        ?>
                    </select>
            </div>
        </div>

<div class="row">
    <div class="col-lg-2 input_field_sections">
        <h5><code>ชื่อ-สกุลผู้ปกครอง *</code></h5>
            <input name="guardian_name" value="" placeholder="" type="text" class="form-control rounded_input" required/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5><code>อาชีพ *</code></h5>
        <select class="form-control" name="guardian_occupation" tabindex="7" required>
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
        <h5><code>รายได้ต่อเดือน *</code></h5>
            <input name="guardian_income" value="" placeholder="" type="text" class="form-control rounded_input" required/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5><code>โทร *</code></h5>
            <input name="guardian_tel" value="" placeholder="" type="text" class="form-control rounded_input" required/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5><code>เลขประจำตัวประชาชน *</code></h5>
            <input name="guardian_national_id" value="" placeholder="" type="text" class="form-control rounded_input" required/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>เกี่ยวข้องกับนักเรียน เป็น  </h5>
            <input name="guardian_relation" value="" placeholder="" type="text" class="form-control rounded_input"/>
    </div>
</div>


<div class="row">
    <div class="col-lg-3 input_field_sections">
        <h5><code>ชื่อวัด *</code></h5>
            <input name="wat_name" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>นามเจ้าอาวาส *</code></h5>
            <input name="wat_abbot" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>โทรศัพท์ *</code></h5>
            <input name="wat_tel" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>ตำบล *</code></h5>
            <input name="wat_tambol" value="" id="wat_tambol" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>อำเภอ *</code></h5>
            <input name="wat_district" value="" id="wat_district" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5><code>จังหวัด *</code></h5>
            <input name="wat_provience" value="" id="wat_provience" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>รหัสไปรษณีย์</h5>
            <input name="wat_postal" value="" id="wat_postal" placeholder="" type="text" class="form-control "/>
    </div>

</div>