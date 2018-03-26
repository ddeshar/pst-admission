<div class="row">
    <div class="col-lg-1 input_field_sections">
        <h5><code>จบชั้น *</code> </h5>
        <select class="form-control" name="education_grade" tabindex="7" required>
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
        <h5><code>จากโรงเรียน *</code></h5>
            <input name="school_name" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5><code>ตำบล *</code></h5>
            <input name="school_tambol" id="school_tambol" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5><code>อำเภอ *</code></h5>
            <input name="school_district" id="school_district" value="" placeholder="" type="text" class="form-control " required/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5><code>จังหวัด *</code></h5>
            <input name="school_provience" id="school_provience" value="" placeholder="" type="text" class="form-control " required/>
    </div>
</div>

<div class="row">
    <div class="col-lg-1 input_field_sections">
        <h5><code>นักธรรม *</code> </h5>
        <select class="form-control" name="naktham_level" tabindex="7" required>
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
        <select class="form-control" name="naktham_year" tabindex="7">
            <?php 
                for($i =0; $i <= 10 ;$i++)
                {
                    $year = date('Y') + 543 - $i;
                    echo '<option value='.$year.'>'.$year.'</option>';
                }
            ?>
        </select>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>ตำบล</h5>
            <input name="naktham_tambol" id="naktham_tambol" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>อำเภอ</h5>
            <input name="naktham_district" id="naktham_district" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>จังหวัด</h5>
            <input name="naktham_provience" id="naktham_provience" value="" placeholder="" type="text" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-1 input_field_sections">
        <h5><code>บาลี *</code> </h5>
        <select class="form-control" name="pali_level" tabindex="7" required>
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
        <select class="form-control" name="pali_year" tabindex="7">
            <?php 
                for($i =0; $i <= 10 ;$i++)
                {
                    $year = date('Y') + 543 - $i;
                    echo '<option value='.$year.'>'.$year.'</option>';
                }
            ?>
        </select>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>ตำบล</h5>
            <input name="pali_tambol" id="pali_tambol" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>อำเภอ</h5>
            <input name="pali_district" id="pali_district" value="" placeholder="" type="text" class="form-control "/>
    </div>
    <div class="col-lg-2 input_field_sections">
        <h5>จังหวัด</h5>
            <input name="pali_provience" id="pali_provience" value="" placeholder="" type="text" class="form-control "/>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 input_field_sections">
        <h5><code>วิชาที่ถนัดเรียน *</code> </h5>
        <select class="form-control" name="newstu_best_sub" tabindex="7" required>
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
        <h5><code>วิชาที่ไม่ถนัด *</code> </h5>
        <select class="form-control" name="newstu_worst_sub" tabindex="7" required>
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