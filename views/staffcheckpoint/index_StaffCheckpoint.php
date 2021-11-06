<table border="1">
<tr><td>IDเจ้าหน้าที่</td>
<td>ชื่อเจ้าหน้าที่</td>
<td>Update</td>
<td>Delete</td>

<?php
    foreach($staffcheckpointList as $staffcheckpoint)
    {
        echo"
        <tr><td>$staffcheckpoint->staffid</td>
        <td>$staffcheckpoint->staffname</td>
        </tr>
        ";
    }
    echo "</table>";
?>
