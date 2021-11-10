<form method="get" action="">
<label>รหัสยารักษา <input type="text" name ="med_id" value="<?php echo $med_id ;?>"/> </label><br>
<label>ชื่อยารักษา <input type="text" name="med_name" /> </label><br>
<label>คุณสมบัติ <input type="text" name="properties" />  </label><br>
<label>วิธีการใช้ตัวยารักษา <input type="text" name="howToUse" /></label><br>

<input type="hidden" name="controller" value="medicine"/>
<button type="submit" name="action" value="addMedicine">Save</button>
<button type="submit" name="action" value="index">Back</button>
</form>