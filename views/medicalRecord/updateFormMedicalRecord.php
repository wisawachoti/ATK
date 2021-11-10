<form>
    <label>รหัสบันทึกจ่ายยา <input type="text" name="medRecord_id"
    value="<?php echo $medrec_id;?>"/>
    </label><br>

    <label>ผู้ป่วย<select name="sp_id">
            <?php
                foreach($spList as $sp)
                {
                    echo "<option value =$sp->sp_id";
                    if($sp_id == $sp->sp_id){echo " selected='selected'";}
                    echo ">$sp->sp_id</option>";
                }
            ?>
    </select></label><br>

    <label>ชื่อยารักษา <select name="med_id">
            <?php
                foreach($medList as $med)
                {
                    echo "<option value =$med->med_id";
                    if($med_id == $med->med_id){echo " selected='selected'";}
                    echo ">$med->med_name</option>";
                }
            ?>            
    </select></label><br>

    <label>จำนวนยา <input type="text" name="quantity"
    value="<?php echo $quantity;?>"/>
    </label><br>

    <label>ชื่อแพทย์อาสา<select name="vd_id">
            <?php
                foreach($docList as $doc)
                {
                    echo "<option value =$doc->vd_id";
                    if($vd_id == $doc->vd_id){echo " selected='selected'";}
                    echo ">$doc->vd_name</option>";
                }
            ?>
    </select></label><br>

    <label>คอมเมนต์ <input type="text" name="comment"
    value="<?php echo $comment ;?>"/>

    </label><br>

    <label>วันที่บันทึก <input type="date" name="recordDate" placeholder="yyyy-mm-dd" 
    value="<?php echo $recordDate;?>"/>
    </label><br>

    <label>เวลาบันทึก <input type="time" name="recordTime" 
    value="<?php echo $recordTime;?>"/>
    </label><br>

    <input type="hidden" name="controller" value="medicalRecord"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="updateMedicalRecord">Update</button>






</form>