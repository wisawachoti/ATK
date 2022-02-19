<style>
    .content-table {
        border-collapse: collapse;
        margin: auto;
        font-size: 0.9em;
        min-width: 500px;
        border-radius: 12px 12px 12px 12px;
        overflow: hidden;
        /*box-shadow: 0 0 8px rgba(10, 50, 50, 5);*/
    }

    .content-table thead tr {
        background-color: rgb(0 ,191 ,255);
        border-bottom: 1px rgb(0 ,191 ,255);
        border-left: 1px rgb(0 ,191 ,255);
        border-right: 1px rgb(0 ,191 ,255);
        color: #ffffff;
        text-align: center;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }
    .content-table th ,
    .content-table td {
        padding: 12px 15px;
    }
    .content-table tbody tr {
        text-align: center;
        color:#000000;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        border-bottom: 1px solid #FFFFE0;
        border-left: 1px solid #FFFFE0;
        border-right: 1px solid #FFFFE0;
    }
    .content-table tbody tr:nth-of-type(even) {
        background-color: #FFFFE0;
    }

    .content-table tbody tr:nth-of-type(odd) {
        background-color: #FFFFE0;
    }

    .content-table tbody tr:nth-of-type(1) {
        background-color: #EEDD82;
    }
    .content-table tbody tr:last-of-type {
        border-bottom: 5px solid rgb(0, 191 ,255);
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }


    .button {
        padding: 5.75px 8px;
        text-align: center;
        text-decoration: none;
        font-size: 12px;
        margin: 0px 0px;
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button1 {
        background-color: rgb(0, 191, 255);
        color: white;
        border: 2px solid rgb(0 ,191 ,255);
    }

    .button1:hover {
        background-color: white;
        color: rgb(0 ,191 ,255);
        border: 2px solid white;
    }

</style>
<p style="font-size:35px;color:purple;font-family:TH SarabunSPK">รายชื่อเจ้าหน้าที่</p>
<table class = "content-table" border=3>
เพิ่มเจ้าหน้าที่ [<a href="?controller=staffcheckpoint&action=newStaffCheckpoint">click</a>]
<br>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="staffcheckpoint">
        <button type="submit" name="action" value="searchStaffCheckpoint">
search</button>
</form>

<tr>
    <td>รหัสเจ้าหน้าที่</td>
    <td>ชื่อเจ้าหน้าที่</td>
    <td>update</td>
    <td>delete</td>
</tr>

<?php foreach($staffcheckpointList as $staffcheckpoint)
{
        echo "<tr>
        <td>$staffcheckpoint->staff_c_id</td>
        <td>$staffcheckpoint->cname</td>
        <td><a href=?controller=staffcheckpoint&action=updateFormStaffCheckpoint&staff_c_id=$staffcheckpoint->staff_c_id>update</a></td>
        <td><a href=?controller=staffcheckpoint&action=deleteConfirmStaffCheckpoint&staff_c_id=$staffcheckpoint->staff_c_id>delete</a></td>
        </tr>";
}

echo "</table>";
?>
