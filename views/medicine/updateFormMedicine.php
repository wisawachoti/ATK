<form method="get" action="">
    <label>รหัสยารักษา<input type="text" name="id" 
                        value="<?php echo $id;?>"/>
    </label><br>

    <label>ชื่อยารักษา<input type="text" name="name"
                    value="<?php echo $name;?>"/>
    </label><br>

    <label>คุณสมบัติ<input type="text" name="ppt"
                    value="<?php echo $ppt;?>"/>
    </label><br>

    <label>วิธีการใช้ตัวยารักษา<input type="text" name="htu"
                    value="<?php echo $htu;?>"/>
    </label><br>

    <input type="hidden" name="controller" value="medicine"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="updateMedicine">Update</button>

</form>
