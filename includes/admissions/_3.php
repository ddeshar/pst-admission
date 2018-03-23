<div class="row">
    <div class="col-lg-4 input_field_sections">                                
        <div class="form-group custom-controls-stacked">
            <label class="custom-control custom-checkbox">
                <input type="hidden" class="custom-control-input" value="0" name="evi_1">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_1">
                <span class="custom-control-indicator custom_checkbox_default"></span>
                <span class="custom-control-description text-default">วุฒิการศึกษา (ปพ.1)</span>
            </label>
            <label class="custom-control custom-checkbox ">
                <input type="hidden" class="custom-control-input" value="0" name="evi_2">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_2">
                <span class="custom-control-indicator custom_checkbox_success"></span>
                <span class="custom-control-description text-success">ใบประกาศนียบัตรจบการศึกษา (ปพ.2)</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="hidden" class="custom-control-input" value="0" name="evi_3">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_3">
                <span class="custom-control-indicator custom_checkbox_danger"></span>
                <span class="custom-control-description text-danger">ใบรับรองผลการศึกษา (ปพ.7)</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="hidden" class="custom-control-input" value="0" name="evi_4">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_4">
                <span class="custom-control-indicator custom_checkbox_primary"></span>
                <span class="custom-control-description text-primary">สำเนาทะเบียนบ้านบิดาผู้ให้กำเนิด</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="hidden" class="custom-control-input" value="0" name="evi_5">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_5">
                <span class="custom-control-indicator custom_checkbox_warning"></span>
                <span class="custom-control-description text-warning">สำเนาหนังสือสุทธิแสดงสังกัดวัด</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="hidden" class="custom-control-input" value="0" name="evi_6">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_6">
                <span class="custom-control-indicator custom_checkbox_info"></span>
                <span class="custom-control-description text-info">หนังสือรับรองจากวัดต้นสังกัด</span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="hidden" class="custom-control-input" value="0" name="evi_7">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_7">
                <span class="custom-control-indicator custom_checkbox_default"></span>
                <span class="custom-control-description text-default">สำเนาทะเบียนบ้านนักเรียน </span>
            </label>
        </div>
    </div>
    <div class="col-lg-4 input_field_sections">                                
        <div class="form-group custom-controls-stacked">
            <label class="custom-control custom-checkbox ">
                <input type="hidden" class="custom-control-input" value="0" name="evi_10">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_10">
                <span class="custom-control-indicator custom_checkbox_success"></span>
                <span class="custom-control-description text-success">สำเนาทะเบียนบ้านมารดาผู้ให้กำเนิด </span>
            </label>
            <label class="custom-control custom-checkbox">
                <input type="hidden" class="custom-control-input" value="0" name="evi_11">
                <input type="checkbox" class="custom-control-input" value="1" name="evi_11">
                <span class="custom-control-indicator custom_checkbox_danger"></span>
                <span class="custom-control-description text-danger">สำเนาใบเปลี่ยนชื่อ-นามสกุล</span>
            </label>
            <div class="input-group">
                <span class="input-group-addon">
                    <label class="custom-control custom-checkbox mr-0 mb-0">
                        <input type="checkbox" class="custom-control-input form-control">
                        <span class="custom-control-indicator"></span>
                    </label>
                </span>
                <input type="text" class="form-control" name="evi_8" placeholder="สำเนาใบประกาศนียบัตร นักธรรมชั้น...">
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <label class="custom-control custom-checkbox mr-0 mb-0">
                        <input type="checkbox" class="custom-control-input form-control">
                        <span class="custom-control-indicator"></span>
                    </label>
                </span>
                <input type="text" class="form-control" name="evi_9" placeholder="สำเนาใบประกาศนียบัตร บาลีประโยค...">
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <label class="custom-control custom-checkbox mr-0 mb-0">
                        <input type="checkbox" class="custom-control-input form-control">
                        <span class="custom-control-indicator"></span>
                    </label>
                </span>
                <input type="text" class="form-control" name="evi_12" placeholder="หลักฐานอื่น ๆ (ระบุ)...">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="row">
            <div class="col-sm-12 m-t-35">
                <h5>Image Upload</h5>
                <input id="input-21" name="image" type="file" accept="image/*" class="file-loading">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6 input_field_sections">
        <h5>บุคคลที่ผ่ามาสมัคร </h5>
        <select class="form-control" name="newstu_user_id" tabindex="7">
            <?php 
                $users_query = "SELECT * FROM users";
                $query_users = mysqli_query($connection, $users_query);
                if(mysqli_num_rows($query_users) > 0){
                    while($users = mysqli_fetch_assoc($query_users)){
            ?>
            <option value="<?php echo $users["user_id"] ?>"><?php echo $users["firstname"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>

    <div class="col-lg-6 input_field_sections">
        <h5>นักเรียนได้รับข่าวสารจากใหน </h5>
        <select class="form-control" name="newstu_get_notice_from" tabindex="7">
            <?php 
                $users_query = "SELECT * FROM users";
                $query_users = mysqli_query($connection, $users_query);
                if(mysqli_num_rows($query_users) > 0){
                    while($users = mysqli_fetch_assoc($query_users)){
            ?>
            <option value="<?php echo $users["user_id"] ?>"><?php echo $users["firstname"] ?></option>
            <?php
                    }
                }
            ?>
        </select>
    </div>
</div>