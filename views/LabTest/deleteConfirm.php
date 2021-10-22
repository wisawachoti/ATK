<?php echo "<br>Are you sure to delete this LabTest<br>";
        echo "รหัสห้องปฎิบัติการ : $LabTest->lab_id <br>";
        echo "ชื่อห้องปฎิบัติการ : $LabTest->lab_name <br>";
?>
    <form method="get" action="">
    <input type="hidden" name="controller" value="LabTest"/>
    <input type="hidden" name="lab_id" value="<?php echo $LabTest->lab_id;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    </form>