<form method="get" action="">
    <label>รหัสตารางงาน <input type="text" name="ws_id" value="<?php echo $wsid;?>"/></label><br>
    <label>วันที่ <input type = "date" name ="date" placeholder="yyyy-mm-dd" value=""/></label><br>

    <label>รายชื่อเจ้าหน้าที่<select name = "cname">
        <?php
            foreach($staffcheckpointList as $staffcheckpoint)
            {
                echo "<option value=$staffcheckpoint->staffid";
                echo "> $staffcheckpoint->staffname </option>";
            }
        ?>
        </select>
    </label><br>

    <label>ตำแหน่ง<select name = "name">
        <?php
            foreach($staffpositioncheckpointList as $staffpcheckpoint)
            {
                echo "<option value=$staffpcheckpoint->staffpid";
                echo "> $staffpcheckpoint->staffpname </option>";
            }
        ?>
        </select>
    </label><br>

    <label>สถานที่ปฏิบัติงาน<select name = "s_name">
        <?php
            foreach($stationList as $staion)
            {
                echo "<option value=$staion->stationid";
                echo "> $staion->stationname </option>";
            }
        ?>
        </select>
    </label><br>

    <input type="hidden" name="controller" value="workschedule"/>
    <button type="submit" name="action" value="addWorkSchedule">Save</button>
    <button type="submit" name="action" value="index">Back</button>
</form>
