<?php class LabTest{
    public $lab_id;
    public $lab_name;

    public function __construct($lab_id,$lab_name)
    {
        $this->lab_id = $lab_id;
        $this->lab_name = $lab_name;
    }
    
    public static function getAll(){
        $LabTest_List = [];
        require("connect_database.php");
        $sql = " SELECT * FROM LabTest ";
        $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc()){
         $lab_id = $my_row['lab_id'];
         $lab_name = $my_row['lab_name'];
         
        $LabTest_List[] = new LabTest($lab_id,$lab_name);
        }
        require("connection_close.php");
        return $LabTest_List;
    }

    public static function Add($lab_id,$lab_name)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `LabTest`(`lab_id`,`lab_name`)
        values('$lab_id','$lab_name')";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }

     public static function search($key)
    {
        $LabTest_List = [];
        require("connect_database.php");
        $sql="SELECT * FROM LabTest  where lab_id like '%$key%' or lab_name like '%$key%' ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $lab_id = $my_row['lab_id'];
            $lab_name = $my_row['lab_name'];
            $LabTest_List[] = new LabTest($lab_id,$lab_name);
        }
            require("connection_close.php");
            return $LabTest_List;
    
    }

    public static function get($lab_id)
    {
        require("connect_database.php");
        $sql="SELECT * FROM LabTest
        WHERE `lab_id` = '$lab_id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $lab_id = $my_row['lab_id'];
        $lab_name = $my_row['lab_name'];
        require("connection_close.php");
        return new LabTest($lab_id,$lab_name);
    }

    public static function update($lab_id,$lab_name)
     {
        require("connect_database.php");
        $sql="UPDATE LabTest SET `lab_name`='$lab_name'
        WHERE `lab_id`= '$lab_id' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

     public static function delete($lab_id)
     {
         require_once("connect_database.php");
         $sql="DELETE FROM LabTest WHERE lab_id='$lab_id' ";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }



    





}
?>