<?php
    class wsModel{
    public $wsid , $date , $staffid , $staffname , $staffpid , $staffpname , $stationid , $stationname;
    public function __construct($wsid , $date , $staffid , $staffname , $staffpid , $staffpname , $stationid , $stationname)
    {
        $this->wsid = $wsid;
        $this->date = $date;
        $this->staffid = $staffid;
        $this->staffname = $staffname;
        $this->staffpid = $staffpid;
        $this->staffpname = $staffpname;
        $this->stationid = $stationid;
        $this->stationname = $stationname;
    }

    public static function getAll()
    {
        $wsList=[];
        require("connection_connect.php");
        $sql = "SELECT ws.ws_id , ws.date , sc.staff_c_id , sc.cname , spc.staff_pc_id , spc.name , station.station_id ,station.s_name
                FROM WorkSchedule as ws
                INNER JOIN StaffCheckpoint as sc ON sc.staff_c_id = ws.staff_c_id
                INNER JOIN StaffPositionCheckpoint as spc ON spc.staff_pc_id = ws.staff_pc_id
                INNER JOIN station ON station.station_id = ws.station_id
                ORDER BY ws.ws_id";
            $result=$conn->query($sql);
            while($my_row=$result->fetch_assoc())
        {
            $wsid=$my_row[ws_id];
            $date=$my_row[date];
            $staffid=$my_row[staff_c_id];
            $staffname=$my_row[cname];
            $staffpid=$my_row[staff_pc_id];
            $staffpname=$my_row[name];
            $stationid=$my_row[station_id];
            $stationname=$my_row[s_name];
            $wsList[]=new wsModel($wsid , $date , $staffid , $staffname , $staffpid , $staffpname , $stationid , $stationname);
        }
        require("connection_close.php");
        return $wsList;
    }
}
?>
