<?php
class StaffCheckpoint{
    public $staffid,$staffname;
    public function __construct($staffid,$staffname)
    {
        $this->staffid=$staffid;
        $this->staffname=$staffname;
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
}
?>
