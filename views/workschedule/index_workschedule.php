<table border="1">
<tr><td>รหัสตารางงาน</td>
<td>วันที่</td>
<tr><td>รหัสเจ้าหน้าที่</td>
<td>ชื่อเจ้าหน้าที่</td>
<tr><td>รหัสตำแหน่ง</td>
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
    foreach($workscheduleList as $workschedule)
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

        <td><a href=?controller=workschedule&action=updateFormWorkSchedule& ws_id = $workschedule->wsid&date = $date->date&staff_c_id=$workschedule->staffid&cname=$workschedule->staffname&staff_pc_id=$workschedule->staffpid&name=$workschedule->staffpname&station_id=$workschedule->stationid&s_name=$workschedule->stationname>update</td>
        <td><a href=?controller=workschedule&action=deleteConfirmWorkSchedule& ws_id = $workschedule->wsid&date = $date->date&staff_c_id=$workschedule->staffid&cname=$workschedule->staffname&staff_pc_id=$workschedule->staffpid&name=$workschedule->staffpname&station_id=$workschedule->stationid&s_name=$workschedule->stationname>delete</td>
        ";
    }
    echo "</table>";
?>
