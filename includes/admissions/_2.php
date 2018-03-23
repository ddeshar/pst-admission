<div class="row">
    <div class="col-lg-1 input_field_sections">
        <h5>จบชั้น </h5>
        <select class="form-control" name="education_grade" tabindex="7">
            <?php 
                $class_query = "SELECT * FROM class";
                $query_class = mysqli_query($connection, $class_query);
                if(mysqli_num_rows($query_class) > 0){
                    while($classs = mysqli_fetch_assoc($query_class)){
            ?>
            <option value="<?php echo $classs["class_id"] ?>"><?php echo $classs["class_name"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
    <div class="col-lg-5 input_field_sections">
        <h5>จากโรงเรียน</h5>
            <input name="school_name" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>ตำบล</h5>
            <input name="school_tambol" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>อำเภอ</h5>
            <input name="school_district" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>จังหวัด</h5>
            <input name="school_provience" value="" placeholder="" type="text" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-1 input_field_sections">
        <h5>นักธรรม </h5>
        <select class="form-control" name="naktham_level" tabindex="7">
            <?php 
                $naktham_query = "SELECT * FROM naktham_level";
                $query_naktham = mysqli_query($connection, $naktham_query);
                if(mysqli_num_rows($query_class) > 0){
                    while($naktham = mysqli_fetch_assoc($query_naktham)){
            ?>
            <option value="<?php echo $naktham["naktham_l_id"] ?>"><?php echo $naktham["naktham_l_name"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>สำนักเรียน</h5>
            <input name="naktham_school" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>ปีพ.ศ.ที่จบ</h5>
            <input name="naktham_year" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>ตำบล</h5>
            <input name="naktham_tambol" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>อำเภอ</h5>
            <input name="naktham_district" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>จังหวัด</h5>
            <input name="naktham_provience" value="" placeholder="" type="text" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-1 input_field_sections">
        <h5>บาลี </h5>
        <select class="form-control" name="pali_level" tabindex="7">
            <?php 
                $pal_query = "SELECT * FROM pal_level";
                $query_pal = mysqli_query($connection, $pal_query);
                if(mysqli_num_rows($query_class) > 0){
                    while($pal = mysqli_fetch_assoc($query_pal)){
            ?>
            <option value="<?php echo $pal["pali_l_id"] ?>"><?php echo $pal["pali_l_name"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
    <div class="col-lg-3 input_field_sections">
        <h5>สำนักเรียน</h5>
            <input name="pali_school" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>ปีพ.ศ.ที่จบ</h5>
            <input name="pali_year" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>ตำบล</h5>
            <input name="pali_tambol" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>อำเภอ</h5>
            <input name="pali_district" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>จังหวัด</h5>
            <input name="pali_provience" value="" placeholder="" type="text" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 input_field_sections">
        <h5>วิชาที่ถนัดเรียน </h5>
        <select class="form-control" name="newstu_best_sub" tabindex="7">
            <?php 
                $best_query = "SELECT * FROM subjects";
                $query_best = mysqli_query($connection, $best_query);
                if(mysqli_num_rows($query_best) > 0){
                    while($best = mysqli_fetch_assoc($query_best)){
            ?>
            <option value="<?php echo $best["subject_id"] ?>"><?php echo $best["subject_name"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
    <div class="col-lg-6 input_field_sections">
        <h5>วิชาที่ไม่ถนัด </h5>
        <select class="form-control" name="newstu_worst_sub" tabindex="7">
            <?php 
                $worst_query = "SELECT * FROM subjects";
                $query_worst = mysqli_query($connection, $worst_query);
                if(mysqli_num_rows($query_worst) > 0){
                    while($worst = mysqli_fetch_assoc($query_worst)){
            ?>
            <option value="<?php echo $worst["subject_id"] ?>"><?php echo $worst["subject_name"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
</div>