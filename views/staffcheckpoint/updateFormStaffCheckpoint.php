<form method="get" action="">
<label>ชื่อเจ้าหน้าที่ <input type="text" name="cname"
        value="<?php echo $staffcheckpoint->cname;?>"/></label><br>

<input type="hidden"name="controller"value="staffcheckpoint"/>
<input type="hidden" name="staff_c_id" value="<?php echo $staffcheckpoint->staff_c_id; ?>"/>
<button type= "submit"name="action"value="updateStaffCheckpoint">update</button>
<button type= "submit"name="action"value="index">back</button>


</form>
