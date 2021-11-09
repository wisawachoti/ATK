<form method="get" action="">
<label>รหัสผลตรวจRT <input type="text" name="rt_test_id" 
value="<?php echo $RTTest->rt_test_id;?>"/></label><br>
<label>วันที่ตรวจRT <input type="date" name="rt_test_date" 
value="<?php echo $RTTest->rt_test_date;?>"/></label><br>
<label>วันที่ตรวจRT <input type="time" name="rt_test_time" 
value="<?php echo $RTTest->rt_test_time;?>"/></label><br>



<input type="hidden"name="controller"value="RTTest"/>
<input type="hidden" name="rt_test_ID" value="<?php echo $RTTest->rt_test_id; ?>"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="update">update</button>

</form>
