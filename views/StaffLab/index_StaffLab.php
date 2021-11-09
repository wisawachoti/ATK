
<table border=1>
<br>new StaffLab <a href=?controller=StaffLab&action=newStaffLab> click</a><br>
<br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="StaffLab">
        <button type="submit" name="action" value="search">
search</button>
</form>



<tr>
    <td>staff_lab_id</td>
    <td>staff_lab_name</td>
    <td>update</td>
    <td>delete</td>
</tr>

<?php foreach($StaffLab_List as $SL)
{
        echo "<tr>
        <td>$SL->staff_lab_id</td>
        <td>$SL->staff_lab_name</td>
        <td><a href=?controller=StaffLab&action=updateForm&staff_lab_id=$SL->staff_lab_id>update</a></td>
        <td><a href=?controller=StaffLab&action=deleteConfirm&staff_lab_id=$SL->staff_lab_id>delete</a></td>
        </tr>";
}

echo "</table>";
?>