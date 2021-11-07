<form method="get" action="">
    <label>รหัสตารางงาน <input type="text" name="ws_id"/></label><br>
    <label>วันที่ <input type = "date" name ="date" placeholder="dd-mm-yyyy" value=""/> </label><br>

    <label>ตำแหน่ง <select name="staff_p_id">
        <?php foreach($staffcheckpointList as $staffcheckpoint){
            echo "<option value = $staffcheckpoint->staffid";
            echo "> $staffcheckpoint->staffname</option>";
            }
            ?>
        </select>
    </label><br>

    <label>ตำแหน่ง <select name="staff_pc_id">
        <?php foreach($staffpositioncheckpointList as $staffpositioncheckpoint){
            echo "<option value = $staffpositioncheckpoint->staffpid";
            echo "> $staffpositioncheckpoint->staffpname</option>";
            }
            ?>
        </select>
    </label><br>

    <label>สถานที่ปฎิบัติงาน <select name="station_id">
        <?php foreach($stationList as $station){
            echo "<option value = $station->stationpid";
            echo "> $station->stationpname</option>";
            }
            ?>
        </select>
    </label><br>

    <input type="hidden" name="controller" value="workschedule"/>
    <button type="submit" name="action" value="addWorkSchedule">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
