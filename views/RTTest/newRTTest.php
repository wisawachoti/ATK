<form method="get" action="">
<label>รหัสผลตรวจRT <input type="text" name="rt_test_id"/></label><br>
<label>วันที่ตรวจRT <input type="date" name="rt_test_date"/></label><br>
<label>เวลาที่ตรวจRT <input type="time" name="rt_test_time"/></label><br>

<label>รหัสATK<select name ="noatk">
    <?php foreach($ATK_List as $atk)
     echo "<option value=$atk->atk_id>$atk->atk_id</option>";
    ?>
     </select></label><br>

<label>ตารางทำงาน<select name ="worksd">
    <?php foreach($WorkSchedule_List as $wsd)
     echo "<option value=$wsd->ws_id>$wsd->ws_id</option>";
    ?>
     </select></label><br>

<label>รหัสเจ้าหน้าที่ห้องปฎิบัติการ<select name ="nostf">
    <?php foreach($StaffLab_List as $stf)
     echo "<option value=$stf->staff_lab_id>$stf->staff_lab_id</option>";
    ?>
     </select></label><br>


     <label>รหัสห้องปฎิบัติการ<select name ="nolab">
    <?php foreach($LabTest_List as $lab)
     echo "<option value=$lab->lab_id>$lab->lab_id</option>";
    ?>
     </select></label><br>




<input type="hidden"name="controller" value="RTTest"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addRTTest">Save</button>

</form>
