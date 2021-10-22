<?php echo "<br>Are you sure to delete this StaffLab<br>";
        echo "รหัสเจ้าหน้าที่ห้องปฎิบัติการ : $StaffLab->staff_lab_id <br>";
        echo "ชื่อเจ้าหน้าที่ห้องปฎิบัติการ : $StaffLab->staff_lab_name <br>";
?>
    <form method="get" action="">
    <input type="hidden" name="controller" value="StaffLab"/>
    <input type="hidden" name="staff_lab_id" value="<?php echo $StaffLab->staff_lab_id;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    </form>