<?php class WorkSchedule{
    public $ws_id;
    public $date;
    public $staff_c_id;
    public $staff_pc_id;
    public $station_id;

    public function __construct($ws_id,$date,$staff_c_id,$staff_pc_id,$station_id)
    {
        $this->ws_id = $ws_id; 
        $this->date = $date;
        $this->staff_c_id = $staff_c_id;
        $this->staff_pc_id = $staff_pc_id;
        $this->station_id = $station_id;     
    }

    public static function getAll(){
        $WorkSchedule_List = [];
        require("connect_database.php");
        $sql = " SELECT * FROM WorkSchedule ";
        $result = $conn->query($sql);
         while($my_row = $result->fetch_assoc()){
         $ws_id = $my_row['ws_id'];
         $date = $my_row['date'];
         $staff_c_id = $my_row['staff_c_id'];
         $staff_pc_id = $my_row['staff_pc_id'];
         $station_id = $my_row['station_id'];

        $WorkSchedule_List[] = new WorkSchedule($ws_id,$date,$staff_c_id,$staff_pc_id,$station_id);
        }
        require("connection_close.php");
        return $WorkSchedule_List;
    }



}