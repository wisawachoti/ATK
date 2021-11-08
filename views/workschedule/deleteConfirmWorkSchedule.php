<?php echo "<br>Are you sure to delete this workschedule<br>";
        echo "รหัสตารางงาน : $wsid <br>";
        echo "วันที่ : $date <br>";
        echo "ชื่อเจ้าหน้าที่ : $staffname<br>";
        echo "ชื่อตำแหน่ง : $staffpname<br>";
        echo "ชื่อตำแหน่ง : $stationname<br>";
?>
    <form method="get" action="">
    <input type="hidden" name="controller" value="workschedule"/>
    <input type="hidden" name="ws_id" value="<?php echo $wsid;?>"/>
    <button type="submit" name="action" value="deleteWorkSchedule">delete</button>
    <button type="submit" name="action" value="index">back</button>

    </form>
