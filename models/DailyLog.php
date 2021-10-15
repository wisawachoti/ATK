<?php
    class DailyLog{
        public $DLOGid;
        public $DLOGdate;
        public $DLOGcolour;
        public $DLOGillness;
        public $HIid;
        public $PPname;

        public function __construct ($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid, $PPname) {
            $this->DLOGid = $DLOGid;
            $this->DLOGdate = $DLOGdate;
            $this->DLOGcolour = $DLOGcolour;
            $this->DLOGillness = $DLOGillness;
            $this->HIid = $HIid;
            $this->PPname = $PPname;
        }
        public static function get($DLOGid) {
            require("connection_connect.php");
            $sql = "SELECT dlog_id, dlog_date, dlog_colour, dlog_illness, hi_id, people_name FROM DailyLog 
            NATURAL JOIN home_isolation NATURAL JOIN ATK NATURAL JOIN People
            WHERE dlog_id = '$DLOGid'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $DLOGid = $my_row['dlog_id'];
            $DLOGdate = $my_row['dlog_date'];
            $DLOGcolour = $my_row['dlog_colour'];
            $DLOGillness = $my_row['dlog_illness'];
            $HIid = $my_row['hi_id'];
            $PPname = $my_row['people_name'];

            require("connection_close.php");
    
            return new DailyLog($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid, $PPname);
        }
        public static function getAll(){
            $dailyloglist = [];
            require("connection_connect.php");
            $sql = "SELECT dlog_id, dlog_date, dlog_colour, dlog_illness, hi_id, people_name FROM DailyLog 
            NATURAL JOIN home_isolation NATURAL JOIN ATK NATURAL JOIN People
            ORDER BY dlog_id";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $DLOGid = $my_row['dlog_id'];
                $DLOGdate = $my_row['dlog_date'];
                $DLOGcolour = $my_row['dlog_colour'];
                $DLOGillness = $my_row['dlog_illness'];
                $HIid = $my_row['hi_id'];
                $PPname = $my_row['people_name'];
                $dailyloglist[] = new DailyLog($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid, $PPname);
            }
            require("connection_close.php");
            return $dailyloglist;
        }
        public static function addDailyLog($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid){
            require("connection_connect.php");
            $sql = "INSERT INTO DailyLog(dlog_id, dlog_date, dlog_colour, dlog_illness, hi_id)
            VALUES('$DLOGid', '$DLOGdate', '$DLOGcolour', '$DLOGillness', '$HIid')";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "ADD SUCCESS!";
        }
        public static function search($key){
            $searchlist = [];
            require("connection_connect.php");
            $sql = "SELECT dlog_id, dlog_date, dlog_colour, dlog_illness, hi_id, people_name FROM DailyLog 
            NATURAL JOIN home_isolation NATURAL JOIN ATK NATURAL JOIN People
            WHERE (dlog_id like '%$key%' or dlog_date like '%$key%' or dlog_colour like '%$key%' or dlog_illness like '%$key%' 
                   or hi_id like '%$key%' or people_name like '%$key%')";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $DLOGid = $my_row['dlog_id'];
                $DLOGdate = $my_row['dlog_date'];
                $DLOGcolour = $my_row['dlog_colour'];
                $DLOGillness = $my_row['dlog_illness'];
                $HIid = $my_row['hi_id'];
                $PPname = $my_row['people_name'];
                $searchlist[] = new DailyLog($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid, $PPname);
            }
            require("connection_close.php");
            return $searchlist;
        }
        public static function update($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid){
            require("connection_connect.php");
            $sql = "UPDATE DailyLog
            SET dlog_date = '$DLOGdate', dlog_colour = '$DLOGcolour', dlog_illness = '$DLOGillness',  hi_id = '$HIid'
            WHERE dlog_id = '$DLOGid'";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "Update SUCCESS!";
        }
        public static function delete($DLOGid){
            require("connection_connect.php");
            $sql = "DELETE From DailyLog
            WHERE dlog_id = '$DLOGid'";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "Delete SUCCESS!";
        }
    }
    ?>