<?php class RTTest{
    public $rt_test_id;
    public $rt_test_date;
    public $rt_test_time;
    public $atk_id;
    public $ws_id;
    public $lab_id;
    public $stafflab_id;

    public function __construct($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id)
    {
        $this->rt_test_id = $rt_test_id;
        $this->rt_test_date = $rt_test_date;
        $this->rt_test_time = $rt_test_time;
        $this->atk_id = $atk_id;
        $this->ws_id = $ws_id;
        $this->lab_id = $lab_id;
        $this->stafflab_id = $stafflab_id;
        
    }

    public static function getAll()
    {
        $RTTest_List = [];
        require("connect_database.php");
        $sql = " SELECT * FROM RTTest ";
        $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc()){
         $rt_test_id = $my_row['rt_test_id'];
         $rt_test_date = $my_row['rt_test_date'];
         $rt_test_time = $my_row['rt_test_time'];
         $atk_id = $my_row['atk_id'];
         $ws_id = $my_row['ws_id'];
         $lab_id = $my_row['lab_id'];
         $stafflab_id = $my_row['stafflab_id'];
         
        $RTTest_List[] = new RTTest($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id);
        }
        require("connection_close.php");
        return $RTTest_List;
    }

    public static function Add($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id)
     { 
        
        require("connect_database.php");
        $sql = "INSERT INTO `RTTest`(`rt_test_id`,`rt_test_date`,`rt_test_time`,`atk_id`,`ws_id`,`lab_id`,`stafflab_id`)
        values('$rt_test_id','$rt_test_date','$rt_test_time','$atk_id','$ws_id','$lab_id','$stafflab_id')";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }

     public static function search($key)
    {
        $RTTest_List = [];
        require("connect_database.php");
        $sql="SELECT * FROM RTTest  where rt_test_id like '%$key%' or rt_test_date like '%$key%' or rt_test_time like '%$key%'
        or atk_id like '%$key%' or ws_id like '%$key%' or lab_id like '%$key%' or  stafflab_id like '%$key%' ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $rt_test_id = $my_row['rt_test_id'];
            $rt_test_date = $my_row['rt_test_date'];
            $rt_test_time = $my_row['rt_test_time'];
            $atk_id = $my_row['atk_id'];
            $ws_id = $my_row['ws_id'];
            $lab_id = $my_row['lab_id'];
            $stafflab_id = $my_row['stafflab_id'];
            $RTTest_List[] = new RTTest($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id);
        }
            require("connection_close.php");
            return $RTTest_List;
    
    }

    public static function get($rt_test_id)
    {
        require("connect_database.php");
        $sql="SELECT * FROM RTTest
        WHERE `rt_test_id` = '$rt_test_id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $rt_test_id = $my_row['rt_test_id'];
        $rt_test_date = $my_row['rt_test_date'];
        $rt_test_time = $my_row['rt_test_time'];
        $atk_id = $my_row['atk_id'];
        $ws_id = $my_row['ws_id'];
        $lab_id = $my_row['lab_id'];
        $stafflab_id = $my_row['stafflab_id'];
        require("connection_close.php");
        return new RTTest($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id);
    }

    public static function update($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id)
     {
        require("connect_database.php");
        $sql="UPDATE RTTest SET `rt_test_date`='$rt_test_date',`rt_test_time`='$rt_test_time',`atk_id`='$atk_id',`ws_id`='$ws_id',`;lab_id`='$lab_id',`stafflab_id`='$stafflab_id'
        WHERE `rt_test_id`= '$rt_test_id' ";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
     }

     public static function delete($rt_test_id)
     {
         require_once("connect_database.php");
         $sql="DELETE FROM RTTest WHERE rt_test_id='$rt_test_id' ";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }





    




}