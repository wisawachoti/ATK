<form method="get" action="">
    <label>วันที่ <input type="date" name="date"
        value="<?php echo $date;?>"/></label><br>

    <label>รายชื่อเจ้าหน้าที่<select name = "cname">
        <?php
            foreach($staffcheckpointList as $staffcheckpoint)
            {
                echo "<option value=$staffcheckpoint->staffid";
                if($staffid==$staffcheckpoint->staffid){echo " selected='selected'";}
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
                if($staffpname==$staffpcheckpoint->staffpname){echo " selected='selected'";}
                echo "> $staffpcheckpoint->staffpname </option>";
            }
        ?>
        </select>
    </label><br>

    <label>สถานที่ปฏิบัติงาน<select name = "s_name">
        <?php
            foreach($stationList as $station)
            {
                echo "<option value=$station->stationid";
                if($stationname==$station->stationname){echo " selected='selected'";}
                echo "> $station->stationname </option>";
            }
        ?>
        </select>
    </label><br>

    <input type="hidden"name="controller"value="workschedule"/>
    <input type="hidden"name="ws_id"value="<?php echo $wsid?>"/>
    <button type= "submit"name="action"value="updateWorkSchedule">update</button>
    <button type= "submit"name="action"value="index">back</button>


</form>
