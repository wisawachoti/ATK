<?php
    class HomeISO{
        public $HIid;
        public $HOSid;
        public $VDid;
        public $ATKid;
        public $HIaddress;
        public function __construct($HIid, $HOSid, $VDid, $ATKid, $HIaddress){
            $this->HIid = $HIid;
            $this->HOSid = $HOSid;
            $this->VDid = $VDid;
            $this->ATKid = $ATKid;
            $this->HIaddress = $HIaddress;
        }
        public static function getAll(){
            $homeisolationlist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM home_isolation
            ORDER BY hi_id";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $HIid = $my_row['hi_id'];
                $HOSid = $my_row['hos_id'];
                $VDid=$my_row['vd_id'];
                $ATKid = $my_row['atk_id'];
                $HIaddress = $my_row['hi_addr'];
                $homeisolationlist[] = new HomeISO($HIid, $HOSid, $VDid, $ATKid, $HIaddress);
            }
            require("connection_close.php");
            return $homeisolationlist;
        }
    }
?>