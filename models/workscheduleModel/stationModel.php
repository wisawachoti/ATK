<?php
class Station{
    public $stationid , $stationname;
    public function __construct($stationid , $stationname)
    {
        $this->stationid = $stationid;
        $this->stationname = $stationname;
    }
    public static function getAll()
    {
        $stationList=[];
        require("connection_connect.php");
        $sql="SELECT station_id , s_name FROM Station
        ORDER BY station_id";
        $result =$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $stationid=$my_row[station_id];
            $stationname=$my_row[s_name];
            $stationList[]=new Station($stationid,$stationname);
        }
        require("connection_close.php");
        return $stationList;
    }
}
?>
