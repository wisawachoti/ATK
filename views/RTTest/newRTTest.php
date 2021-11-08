<form method="get" action="">
<label>รหัสผลตรวจRT <input type="text" name="rt_test_id"/></label><br>
<label>วันที่ตรวจRT <input type="text" name="rt_test_date"/></label><br>
<label>เวลาที่ตรวจRT <input type="text" name="rt_test_time"/></label><br>
<label>รหัสผลตรวจATK <select name ="atk_id">

<?php foreach($ATK_list as $at)
{echo "<option value=$at->atk_id>$at->atk_id</option>";
}?>

</select></label><br>

<input type="hidden"name="controller"value="RTTest"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addRTTest">Save</button>

</form>
