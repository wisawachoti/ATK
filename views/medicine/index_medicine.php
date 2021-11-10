<table border="1">
<tr> <td>รหัสยารักษา</td><td>ชื่อยารักษา</td><td>คุณสมบัติ</td><td>วิธีการใช้ตัวยารักษา</td><td>Update</td>
<td>Delete</td> </tr>

<br>new medicine <a href="?controller=medicine&action=newMedicine">เพิ่มข้อมูล</a><br><br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="medicine"/>
        <button type="submit" name="action" value="search">
        Search
        </button>
</form>
<br><br>

<?php

    foreach($medList as $med)
    {
        echo "<tr><td> $med->med_id </td>
        <td> $med->med_name</td>
        <td> $med->properties</td>
        <td> $med->howToUse</td>
        <td> 
        <a href=?controller=medicine&action=updateForm&med_id=$med->med_id&med_name=$med->med_name&properties=$med->properties&howToUse=$med->howToUse>Update</a>
        </td>
        <td>
        <a href=?controller=medicine&action=deleteConfirm&med_id=$med->med_id&med_name=$med->med_name>Delete</a>
        </td> 
        </tr>";
    }
echo "</table>"
?>