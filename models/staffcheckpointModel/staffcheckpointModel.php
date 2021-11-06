<?php
class StaffCheckpoint{
    public $staffid , $staffname;
    public function __construct($staffid , $staffname)
    {
        $this->staffid = $staffid;
        $this->staffname = $staffname;
    }
    public static function getAll()
    {
        $staffcheckpointList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM StaffCheckpoint ORDER BY staff_c_id";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $staffid=$my_row[staff_c_id];
            $staffname=$my_row[cname];
            $staffcheckpointList[]=new StaffCheckpoint($staffid,$staffname);
        }
        require("connection_close.php");
        return $staffcheckpointList;
    }

    public static function Add($staffid,$staffname)
    {
        require("connection_connect.php");
        $sql="insert into StaffCheckpoint(staff_c_id,cname)values
        ('$staffid','$staffname')";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }

    public static function search($key)
    {
        $staffcheckpointList=[];
        require("connection_connect.php");
        $sql="SELECT staff_c_id , name
        FROM StaffCheckpoint
        WHERE(staff_c_id like '%$key%' or cname like '%$key%')
        ORDER BY staff_c_id ASC";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $staffid=$my_row[staff_c_id];
            $staffname=$my_row[cname];
            $staffcheckpointList[]=new StaffCheckpoint($staffid,$staffname);
        }
        require("connection_close.php");
        return $staffcheckpointList;

    }
}
?>
