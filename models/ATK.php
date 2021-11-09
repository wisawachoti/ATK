<?php class ATK{
    public $atk_id;
    public $people_id;
    public $status_atk_id;
    public $ws_id;
    public $time;
    public $date;

    public function __construct($atk_id,$people_id,$status_atk_id,$ws_id,$time,$date)
    {
        $this->atk_id = $atk_id;
        $this->people_id = $people_id;
        $this->status_atk_id = $status_atk_id;
        $this->ws_id = $ws_id;
        $this->time = $time;
        $this->date = $date;
        
    }

    public static function getAll(){
        $ATK_List = [];
        require("connect_database.php");
        $sql = " SELECT * FROM ATK ";
        $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc()){
         $atk_id = $my_row['atk_id'];
         $people_id = $my_row['people_id'];
         $status_atk_id = $my_row['status_atk_id'];
         $ws_id = $my_row['ws_id'];
         $time = $my_row['time'];
         $date = $my_row['date'];

        $ATK_List[] = new ATK($atk_id,$people_id,$status_atk_id,$ws_id,$time,$date);
        }
        require("connection_close.php");
        return $ATK_List;
    }


}