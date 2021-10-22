<?php class StaffLab{
    public $staff_lab_id,$staff_lab_name;
    
    public function __construct($staff_lab_id,$staff_lab_name){
    $this->staff_lab_id = $staff_lab_id;
    $this->staff_lab_name = $staff_lab_name;
    
    
    }
    
    public static function getAll(){
        $StaffLab_List = [];
        require("connect_database.php");
        $sql = " SELECT * FROM StaffLab ";
        $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc()){
         $staff_lab_id = $my_row['staff_lab_id'];
         $staff_lab_name = $my_row['staff_lab_name'];
         
        $StaffLab_List[] = new StaffLab($staff_lab_id,$staff_lab_name);
        }
        require("connection_close.php");
        return $StaffLab_List;
    }
    
    public static function search($key)
    {
        $StaffLab_List = [];
        require("connect_database.php");
        $sql="SELECT * FROM StaffLab  where staff_lab_id like '%$key%' or staff_lab_name like '%$key%' ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $staff_lab_id = $my_row['staff_lab_id'];
            $staff_lab_name = $my_row['staff_lab_name'];
            $StaffLab_List[] = new StaffLab($staff_lab_id,$staff_lab_name);
        }
            require("connection_close.php");
            return $StaffLab_List;
    
    }

    public static function Add($staff_lab_id,$staff_lab_name)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `StaffLab`(`staff_lab_id`,`staff_lab_name`)
        values('$staff_lab_id','$staff_lab_name')";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }

     public static function get($staff_lab_id){
        require("connect_database.php");
        $sql="SELECT * FROM StaffLab 
        WHERE `staff_lab_id` = '$staff_lab_id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $staff_lab_id = $my_row['staff_lab_id'];
        $staff_lab_name = $my_row['staff_lab_name'];
        require("connection_close.php");
        return new StaffLab($staff_lab_id,$staff_lab_name);
        }

     public static function delete($staff_lab_id)
     {
         require_once("connect_database.php");
         $sql="DELETE FROM StaffLab WHERE staff_lab_id='$staff_lab_id' ";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }
     public static function update($staff_lab_id,$staff_lab_name)
     {
        require("connect_database.php");
        $sql="UPDATE StaffLab SET `staff_lab_name`='$staff_lab_name'
        WHERE `staff_lab_id`= '$staff_lab_id' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }


}
?>