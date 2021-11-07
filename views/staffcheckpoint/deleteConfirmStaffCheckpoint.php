<?php echo "<br>Are you sure to delete this staffcheckpoint? <br>
            <br>รหัสเจ้าหน้าที่:$staffcheckpoint->staffid
            <br>ชื่อเจ้าหน้าที่:$staffcheckpoint->staffname<br>";?>
<form method="get" action="">
    <input type="hidden" name="controller" value="staffcheckpoint"/>
    <input type="hidden" name="staff_c_id" value="<?php echo $staffcheckpoint->staffid;?>"/>
    <input type="hidden" name="cname" value="<?php echo $staffcheckpoint->staffname;?>"/>
    <button type="submit" name="action" value="deleteStaffCheckpoint">Delete</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
