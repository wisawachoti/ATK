<?php
    class StaffCheckpoint{
    public $staff_c_id,$cname;

    public function __construct($staff_c_id,$cname)
    {
        $this->staff_c_id = $staff_c_id;
        $this->cname = $cname;
    }

    public static function getAll()
    {
        $staffcheckpointList = [];
        require("connection_connect.php");
        $sql = " SELECT * FROM StaffCheckpoint ";
        $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc())
        {
         $staff_c_id = $my_row['staff_c_id'];
         $cname = $my_row['cname'];
         $staffcheckpointList[] = new StaffCheckpoint($staff_c_id,$cname);
        }
        require("connection_close.php");
        return $staffcheckpointList;
    }


    public static function Add($staff_c_id,$cname)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO StaffCheckpoint(staff_c_id,cname)values
        ('$staff_c_id','$cname')";
        $result = $conn->query($sql);

        require("connection_close.php");
        return "add success $result rows";
    }

    public static function search($key)
    {
        $staffcheckpointList = [];
        require("connection_connect.php");
        $sql="SELECT * FROM StaffCheckpoint
        WHERE staff_c_id like '%$key%' or cname like '%$key%'";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $staff_c_id = $my_row['staff_c_id'];
            $cname = $my_row['cname'];
            $staffcheckpointList[] = new StaffCheckpoint($staff_c_id,$cname);
        }
            require("connection_close.php");
            return $staffcheckpointList;

    }
    public static function get($staff_c_id)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM StaffCheckpoint
        WHERE `staff_c_id` = '$staff_c_id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $staff_c_id = $my_row['staff_c_id'];
        $cname = $my_row['cname'];
        require("connection_close.php");
        return new StaffCheckpoint($staff_c_id,$cname);
    }

    public static function update($staff_c_id,$cname)
    {
        require("connection_connect.php");
        $sql="UPDATE StaffCheckpoint SET `cname`='$cname'
        WHERE `staff_c_id`= '$staff_c_id' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    public static function delete($staff_c_id)
    {
         require("connection_connect.php");
         $sql="DELETE FROM StaffCheckpoint WHERE staff_c_id='$staff_c_id'";
         $result=$conn->query($sql);
         require("connection_close.php");
         return "delete success $result row";
    }




}
?>
