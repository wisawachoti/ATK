<table border="1">
<tr><td>รหัสตารางงาน</td>
<td>วันที่</td>
<td>รหัสเจ้าหน้าที่</td>
<td>ชื่อเจ้าหน้าที่</td>
<td>รหัสตำแหน่ง</td>
<td>ชื่อตำแหน่ง</td>
<td>รหัสจุดตรวจ</td>
<td>ชื่อจุดตรวจ</td>
<td>Update</td>
<td>Delete</td>
เพิ่มตารางงาน [<a href="?controller=workschedule&action=newWorkSchedule">click</a>]<br>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="workschedule"/>
    <button type="submit" name="action" value="searchWorkSchedule">ค้นหา</button>
</form>
<?php
    foreach($wsList as $workschedule)
    {
        echo"
        <tr><td>$workschedule->wsid</td>
        <td>$workschedule->date</td>
        <td>$workschedule->staffid</td>
        <td>$workschedule->staffname</td>
        <td>$workschedule->staffpid</td>
        <td>$workschedule->staffpname</td>
        <td>$workschedule->stationid</td>
        <td>$workschedule->stationname</td>

        <td><a href=?controller=workschedule&action=updateFormWorkSchedule&ws_id=$workschedule->wsid&date=$workschedule->date&name=$workschedule->staffpname&s_name=$workschedule->stationname&staffid=$workschedule->staffid&cname=$workschedule->staffname>update</td>
        <td><a href=?controller=workschedule&action=deleteConfirmWorkSchedule&ws_id=$workschedule->wsid&date=$workschedule->date&name=$workschedule->staffpname&s_name=$workschedule->stationname&staffid=$workschedule->staffid&cname=$workschedule->staffname>delete</td>
        ";
    }
    echo "</table>";
?>
