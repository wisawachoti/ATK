<p> Welcome to our homepage</p>
<p> นายนักรบ สุขใจ</p>
<p> 6220502141</p>


<table border="1">
<tr><td>รหัสตารางงาน</td>
<td>วันที่</td>
<td>รหัสเจ้าหน้าที่</td>
<td>ชื่อเจ้าหน้าที่</td>
<td>รหัสตำแหน่ง</td>
<td>ชื่อตำแหน่ง</td>
<td>รหัสจุดตรวจ</td>
<td>ชื่อจุดตรวจ</td>
<form method="get" action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="pages"/>
    <button type="submit" name="action" value="searchwsHome">ค้นหา</button>
</form>
<p style="font-size:20px;color:black;font-family:TH SarabunSPK">ตารางงานล่าสุด</p>
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
