<?php

    echo "<br>Are you sure to delete this medicine <br>
    <br>รหัสยารักษา: $id ชื่อยารักษา: $name <br>";
            
?>

<form method="get" action="">
    <input type="hidden" name="controller" value="medicine"/>
    <input type="hidden" name="med_id" value="<?php echo $id;?>"/>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="deleteMedicine">Delete</button>
    
</form>