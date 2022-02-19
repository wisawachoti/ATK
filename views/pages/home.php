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
        border-bottom: 1px solid #E8E8E8;
        border-left: 1px solid #E8E8E8;
        border-right: 1px solid #E8E8E8;
    }
    .content-table tbody tr:nth-of-type(even) {
        background-color: #E8E8E8;
    }

    .content-table tbody tr:nth-of-type(odd) {
        background-color: #E8E8E8;
    }

    .content-table tbody tr:nth-of-type(1) {
        background-color: #B5B5B5;
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
<p> Welcome to our homepage</p>
<p> นายนักรบ สุขใจ</p>
<p> 6220502141</p>


<table class = "content-table" border="1">
<tr><td>รหัสตารางงาน</td>
<td>วันที่</td>
<td>รหัสเจ้าหน้าที่</td>
<td>ชื่อเจ้าหน้าที่</td>
<td>รหัสตำแหน่ง</td>
<td>ชื่อตำแหน่ง</td>
<td>รหัสจุดตรวจ</td>
<td>ชื่อจุดตรวจ</td>

<p style="font-size:20px;color:purple;font-family:TH SarabunSPK">ตารางงานล่าสุด</p>
<?php
    foreach($wsList as $wshome)
    {
        echo"
        <tr><td>$wshome->wsid</td>
        <td>$wshome->date</td>
        <td>$wshome->staffid</td>
        <td>$wshome->staffname</td>
        <td>$wshome->staffpid</td>
        <td>$wshome->staffpname</td>
        <td>$wshome->stationid</td>
        <td>$wshome->stationname</td>

        ";
    }
    echo "</table>";
?>


<table class = "content-table" border="1">
<tr><td>รหัสตารางงาน</td>
<td>วันที่</td>
<td>ชื่อตำแหน่ง</td>
<td>จำนวน</td>


<p style="font-size:20px;color:purple;font-family:TH SarabunSPK">จำนวนตำแหน่งในตารางงานล่าสุด</p>
<?php
    foreach($pList as $staffp)
    {
        echo"
        <tr><td>$staffp->wsid</td>
        <td>$staffp->date</td>
        <td>$staffp->staffpname</td>
        <td>$staffp->stationid</td>

        ";
    }
    echo "</table>";
?>
