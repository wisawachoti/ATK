<?php

    echo"<br>Are you sure to delete this MedicalRecord?<br>
    <br>รหัสบันทึกจ่ายยา:  $medrec_id <br>รหัสผู้ป่วย:  $sp_id <br>ชื่อผู้ป่วย:  $people_name <br>รหัสยารักษา:  $med_id <br>ชื่อยารักษา:  $med_name 
    <br>รหัสแพทย์อาสา:  $vd_id <br>ชื่อแพทย์อาสา:  $vd_name";

?>

<form method="get" action="">
    <input type="hidden" name="controller" value="medicalRecord"/>
    <input type="hidden" name="medRecord_id" value="<?php echo $medrec_id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="deleteMedicalRecord">Delete</button>



</form>