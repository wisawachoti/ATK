<p style="font-size:35px;color:purple;font-family:TH SarabunSPK">ข้อมูลเจ้าหน้าที่</p>
<table border=1>
เพิ่มเจ้าหน้าที่ [<a href="?controller=staffcheckpoint&action=newStaffCheckpoint">click</a>]
<br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="staffcheckpoint">
        <button type="submit" name="action" value="searchStaffCheckpoint">
search</button>
</form>

<tr>
    <td>รหัสเจ้าหน้าที่</td>
    <td>ชื่อเจ้าหน้าที่</td>
    <td>update</td>
    <td>delete</td>
</tr>

<?php foreach($staffcheckpointList as $staffcheckpoint)
{
        echo "<tr>
        <td>$staffcheckpoint->staff_c_id</td>
        <td>$staffcheckpoint->cname</td>
        <td><a href=?controller=staffcheckpoint&action=updateFormStaffCheckpoint&staff_c_id=$staffcheckpoint->staff_c_id>update</a></td>
        <td><a href=?controller=staffcheckpoint&action=deleteConfirmStaffCheckpoint&staff_c_id=$staffcheckpoint->staff_c_id>delete</a></td>
        </tr>";
}

echo "</table>";
?>
