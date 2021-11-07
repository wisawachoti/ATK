<?php
class StaffPositionCheckpoint{
    public $staffpid , $staffpname;
    public function __construct($staffpid , $staffpname)
    {
        $this->staffpid = $staffpid;
        $this->staffpname = $staffpname;
    }
    public static function getAll()
    {
        $staffpositioncheckpointList=[];
        require("connection_connect.php");
        $sql="SELECT staff_pc_id , name FROM StaffPositionCheckpoint
        ORDER BY staff_pc_id";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $staffpid=$my_row[staff_pc_id];
            $staffpname=$my_row[name];
            $staffpositioncheckpointList[]=new StaffPositionCheckpoint($staffpid,$staffpname);
        }
        require("connection_close.php");
        return $staffpositioncheckpointList;
    }
}
?>
