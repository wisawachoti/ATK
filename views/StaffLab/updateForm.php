
<form method="get" action="">
<label>ชื่อเจ้าหน้าที่ห้องปฎิบัติการ <input type="text" name="staff_lab_name" 
        value="<?php echo $StaffLab->staff_lab_name;?>"/></label><br>




<input type="hidden"name="controller"value="StaffLab"/>
<input type="hidden" name="staff_lab_id" value="<?php echo $StaffLab->staff_lab_id; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
