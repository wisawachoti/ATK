<?php echo "<br>Are you sure to delete this RTTest<br>";
        echo "รหัสผลตรวจRT : $RTTest->rt_test_id <br>";
        echo "วันที่ตรวจRT : $RTTest->rt_test_date <br>";
        echo "เวลาที่ตรวจRT : $RTTest->rt_test_time <br>";
        echo "รหัสผลตรวจATK : $RTTest->atk_id <br>";
        echo "รหัสตารางทำงาน : $RTTest->ws_id <br>";
        echo "รหัสห้องปฎิบัติการ : $RTTest->lab_id <br>";
        echo "รหัสเจ้าหน้าที่ห้องปฎิบัติการ : $RTTest->stafflab_id <br>";
?>
    <form method="get" action="">
    <input type="hidden" name="controller" value="RTTest"/>
    <input type="hidden" name="rt_test_id" value="<?php echo $RTTest->rt_test_id;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete">delete</button>
    </form>