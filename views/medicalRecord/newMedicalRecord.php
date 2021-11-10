<form method="get" action="">
    <label>รหัสบันทึกจ่ายยา <input type="text" name="medRecord_id"
    value="<?php echo $medrec ;?>"/></label><br>

    <label>ผู้ป่วย<select name="sp_id">
            <?php
                foreach($spList as $sp)
                {
                    echo "<option value = $sp->sp_id>$sp->sp_id</option>";
                }
            ?>
    </select></label><br>

    <label>ชื่อยารักษา <select name="med_id">
            <?php
                foreach($medList as $med)
                {
                    echo "<option value = $med->med_id>$med->med_name</option>";
                }
            ?>            
    </select></label><br>

    <label>จำนวน<input type="text" name="quantity"/></label><br>

    <label>ชื่อแพทย์อาสา<select name="vd_id">
            <?php
                foreach($docList as $doc)
                {
                    echo "<option value = $doc->vd_id>$doc->vd_name</option>";
                }
            ?>
    </select></label><br>

    <label>คอมเมนต์<input type="text" name="comment"/></label><br>
    <label>วันที่บันทึก<input type="date" name="recordDate" placeholder="yyyy-mm-dd" value=""/></label><br>
    <label>เวลาบันทึก<input type="time" name="recordTime" value=""/></label><br>
    
    <input type="hidden" name="controller" value="medicalRecord"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addMedicalRecord">Save</button>

</form>