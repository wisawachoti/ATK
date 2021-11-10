<table border="1">
<tr> 
<td>รหัสบันทึกจ่ายยา</td>
<td>รหัสผู้ป่วย</td>
<td>ชื่อผู้ป่วย</td>
<td>รหัสยารักษา</td>
<td>ชื่อยารักษา</td>
<td>จำนวนยา</td>
<td>สถานะ</td>
<td>สี</td>
<td>รหัสแพทย์อาสา</td>
<td>ชื่อแพทย์อาสา</td>
<td>คอมเมนต์</td>
<td>วันที่บันทึก</td>
<td>เวลาบันทึก</td>
<td>Update</td>
<td>Delete</td> </tr>

<br>New MedicineRecord <a href="?controller=medicalRecord&action=newMedicalRecord">เพิ่มข้อมูล</a><br><br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="medicalRecord"/>
        <button type="submit" name="action" value="search">
        Search
        </button>
</form>
<br><br>

<?php

    foreach($medrecList as $medrec)
    {
        echo "<tr>
        <td> $medrec->mr_id </td>
        <td> $medrec->sp_id</td>
        <td> $medrec->people_name</td>
        <td> $medrec->med_id</td>
        <td> $medrec->med_name</td>
        <td> $medrec->quantity</td>
        <td> $medrec->status</td>
        <td> $medrec->color</td>
        <td> $medrec->vd_id</td>
        <td> $medrec->vd_name</td>
        <td> $medrec->comment</td>
        <td> $medrec->recordDate</td>
        <td> $medrec->recordTime</td>

        <td> 
        <a href=?controller=medicalRecord&action=updateForm&medRecord_id=$medrec->mr_id&med_id=$medrec->med_id&sp_id=$medrec->sp_id&quantity=$medrec->quantity&vd_id=$medrec->vd_id&recordDate=$medrec->recordDate&recordTime=$medrec->recordTime&comment=$medrec->comment>Update</a>
        </td>
        <td>
        <a href=?controller=medicalRecord&action=deleteConfirm&medRecord_id=$medrec->mr_id&sp_id=$medrec->sp_id&people_name=$medrec->people_name&med_id=$medrec->med_id&med_name=$medrec->med_name&vd_id=$medrec->vd_id&vd_name=$medrec->vd_name>Delete</a>
        </td> 
        </tr>";
    }
echo "</table>"
?>