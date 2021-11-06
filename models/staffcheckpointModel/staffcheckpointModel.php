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
        $sql="SELECT * FROM StaffCheckpoint ORDER BY StaffCheckpoint.staff_c_id";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $staffid=$my_row[staff_c_id];
            $staffname=$my_row[name];
            $staffcheckpointList[]=new StaffCheckpoint($staffid,$staffname);
        }
        require("connection_close.php");
        return $staffcheckpointList;
    }

    public static function Add($staffid,$staffname)
    {
        require("connection_connect.php");
        $sql="insert into StaffCheckpoint(StaffCheckpoint.staff_c_id , StaffCheckpoint.name)values
        ('$staffid','$staffname')";
        $result =$conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }
}
?>
