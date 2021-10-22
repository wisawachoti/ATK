<table border=1>
<br>new LabTest <a href=?controller=LabTest&action=newLabTest> click</a><br>
<br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="LabTest">
        <button type="submit" name="action" value="search">
search</button>
</form>




<tr>
    <td>lab_id</td>
    <td>lab_name</td>
    <td>update</td>
    <td>delete</td>
</tr>

<?php foreach($LabTest_List as $LT)
{
        echo "<tr>
        <td>$LT->lab_id</td>
        <td>$LT->lab_name</td>
        <td><a href=?controller=LabTest&action=updateForm&lab_id=$LT->lab_id>update</a></td>
        <td><a href=?controller=LabTest&action=deleteConfirm&lab_id=$LT->lab_id>delete</a></td>
        </tr>";
}

echo "</table>";
?>

