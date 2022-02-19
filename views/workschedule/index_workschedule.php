<style>
    .content-table {
        border-collapse: collapse;
        margin: auto;
        font-size: 0.9em;
        min-width: 500px;
        border-radius: 12px 12px 12px 12px;
        overflow: hidden;
        /*box-shadow: 0 0 8px rgba(10, 50, 50, 5);*/
    }

    .content-table thead tr {
        background-color: rgb(0 ,191 ,255);
        border-bottom: 1px rgb(0 ,191 ,255);
        border-left: 1px rgb(0 ,191 ,255);
        border-right: 1px rgb(0 ,191 ,255);
        color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }
    .content-table th ,
    .content-table td {
        padding: 12px 15px;
    }
    .content-table tbody tr {
        text-align: center;
        color:#000000;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-bottom: 1px solid #E0FFFF;
        border-left: 1px solid #E0FFFF;
        border-right: 1px solid #E0FFFF;
    }
    .content-table tbody tr:nth-of-type(even) {
        background-color: #E0FFFF;
    }

    .content-table tbody tr:nth-of-type(odd) {
        background-color: #E0FFFF;
    }

    .content-table tbody tr:nth-of-type(1) {
        background-color: #AFEEEE;
    }
    .content-table tbody tr:last-of-type {
        border-bottom: 5px solid rgb(0, 191 ,255);
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }


    .button {
        padding: 5.75px 8px;
        text-align: center;
        text-decoration: none;
        font-size: 12px;
        margin: 0px 0px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: rgb(0, 191, 255);
        color: white;
        border: 2px solid rgb(0 ,191 ,255);
    }

    .button1:hover {
        background-color: white;
        color: rgb(0 ,191 ,255);
        border: 2px solid white;
    }

</style>


<p style="font-size:35px;color:purple;font-family:TH SarabunSPK">ตารางงาน</p>
<table class = "content-table" border="3">
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
        <td><a href=?controller=workschedule&action=deleteConfirmWorkSchedule&ws_id=$workschedule->wsid&date=$workschedule->date&name=$workschedule->staffpname&s_name=$workschedule->stationname&cname=$workschedule->staffid>delete</td>
        ";
    }
    echo "</table>";
?>
