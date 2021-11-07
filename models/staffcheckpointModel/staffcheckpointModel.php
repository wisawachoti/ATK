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
        $sql="SELECT staff_c_id , cname FROM StaffCheckpoint
        ORDER BY staff_c_id";
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
        $sql = "SELECT staff_c_id , cname
        FROM StaffCheckpoint
        WHERE(staff_c_id like '%$key%' or cname like '%$key%')";
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

    public static function get($staffid,$staffname)
    {
        require("connection_connect.php");
        $sql = "SELECT staff_c_id , cname
        FROM StaffCheckpoint
        WHERE(staff_c_id = '$staffid' AND cname = '$staffname')
        ORDER BY staff_c_id";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $staffid=$my_row[staff_c_id];
        $staffname=$my_row[cname];

        return new StaffCheckpoint($staffid,$staffname);
    }

    public static function update($staffid,$staffname)
    {
        require("connection_connect.php");
        $sql="UPDATE StaffCheckpoint SET cname='$staffname'
        WHERE  staff_c_id='$staffid'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($staffid,$staffname)
    {
        require("connection_connect.php");
        $sql="DELETE FROM StaffCheckpoint WHERE staff_c_id='$staffid' AND cname='$staffname'";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}
?>
