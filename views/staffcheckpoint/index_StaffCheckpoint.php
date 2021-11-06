<table border="1">
<tr><td>IDเจ้าหน้าที่</td>
<td>ชื่อเจ้าหน้าที่</td>
<td>Update</td>
<td>Delete</td>
New StaffCheckpoint [<a href="?controller=staffcheckpoint&action=newStaffCheckpoint">click</a>]<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="staffcheckpoint"/>
    <button type="submit" name="action" value="searchStaffCheckpoint">Search</button>
</form>
<?php
    foreach($staffcheckpointList as $staffcheckpoint)
    {
        echo"
        <tr><td>$staffcheckpoint->staffid</td>
        <td>$staffcheckpoint->staffname</td>

        <td><a href=?controller=staffcheckpoint&action=updateFormStaffCheckpoint&staff_c_id=$staffcheckpoint->staffid&name=$staffcheckpoint->staffname>update</td>
        <td><a href=?controller=staffcheckpoint&action=deleteConfirmStaffCheckpoint&staff_c_id=$staffcheckpoint->staffid&name=$staffcheckpoint->staffname>delete</td>
        ";
    }
    echo "</table>";
?>
