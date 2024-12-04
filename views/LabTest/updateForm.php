
<form method="get" action="">
<label>ชื่อห้องปฎิบัติการ <input type="text" name="lab_name" 
        value="<?php echo $LabTest->lab_name;?>"/></label><br>



<input type="hidden"name="controller"value="LabTest"/>
<input type="hidden" name="lab_id" value="<?php echo $LabTest->lab_id; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
