<form method="get" action="">

    <label>รหัสเจ้าหน้าที่ <input type="text" name="staff_c_id"
        value="<?php echo $staffcheckpoint->staffid;?>"/></label><br>
    <label>ชื่อเจ้าหน้าที่ <input type="text" name="cname"
        value="<?php echo $staffcheckpoint->staffname;?>"/></label><br>

    <input type="hidden" name="controller" value="staffcheckpoint"/>
    <button type="submit" name="action" value="updateStaffCheckpoint">update</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
