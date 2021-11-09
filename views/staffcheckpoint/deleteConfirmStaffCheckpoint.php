<?php echo "<br>Are you sure to delete this staffcheckpoint<br>";
        echo "รหัสเจ้าหน้าที่ : $staffcheckpoint->staff_c_id <br>";
        echo "ชื่อเจ้าหน้าที่ : $staffcheckpoint->cname <br>";
?>
    <form method="get" action="">
    <input type="hidden" name="controller" value="staffcheckpoint"/>
    <input type="hidden" name="staff_c_id" value="<?php echo $staffcheckpoint->staff_c_id;?>"/>
    <button type="submit" name="action" value="deleteStaffCheckpoint">delete</button>
    <button type="submit" name="action" value="index">back</button>

    </form>
