<?php
    class NesObject{
        public $NESid;
        public $OBJid;
        public $OBJname;
        public $NESquantity;
        public $HIid;
        public $PPname;

        public function __construct ($NESid, $OBJid, $OBJname, $NESquantity, $HIid, $PPname) {
            $this->NESid = $NESid;
            $this->OBJid = $OBJid;
            $this->OBJname = $OBJname;
            $this->NESquantity = $NESquantity;
            $this->HIid = $HIid;
            $this->PPname = $PPname;
        }
        public static function get($NESid) {
            require("connection_connect.php");
            $sql = "SELECT nes_id, object_id, object_name, nes_quantity, hi_id, people_name FROM NecessaryObject 
            NATURAL JOIN Object NATURAL JOIN home_isolation NATURAL JOIN ATK NATURAL JOIN People
            WHERE nes_id = '$NESid'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $NESid = $my_row['nes_id'];
            $OBJid = $my_row['object_id'];
            $OBJname = $my_row['object_name'];
            $NESquantity = $my_row['nes_quantity'];
            $HIid = $my_row['hi_id'];
            $PPname = $my_row['people_name'];

            require("connection_close.php");
    
            return new NesObject($NESid, $OBJid, $OBJname, $NESquantity, $HIid, $PPname);
        }
        public static function getAll(){
            $nesobjectlist = [];
            require("connection_connect.php");
            $sql = "SELECT nes_id, object_id, object_name, nes_quantity, hi_id, people_name FROM NecessaryObject 
            NATURAL JOIN Object NATURAL JOIN home_isolation NATURAL JOIN ATK NATURAL JOIN People
            ORDER BY nes_id";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $NESid = $my_row['nes_id'];
                $OBJid = $my_row['object_id'];
                $OBJname = $my_row['object_name'];
                $NESquantity = $my_row['nes_quantity'];
                $HIid = $my_row['hi_id'];
                $PPname = $my_row['people_name'];
                $nesobjectlist[] = new NesObject($NESid, $OBJid, $OBJname, $NESquantity, $HIid, $PPname);
            }
            require("connection_close.php");
            return $nesobjectlist;
        }
        public static function addNesObject($NESid, $OBJid, $NESquantity, $HIid){
            require("connection_connect.php");
            $sql = "INSERT INTO NecessaryObject(nes_id, nes_quantity, object_id, hi_id)
            VALUES('$NESid', '$NESquantity', '$OBJid', '$HIid')";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "ADD SUCCESS!";
        }
        public static function search($key){
            $searchlist = [];
            require("connection_connect.php");
            $sql = "SELECT nes_id, object_id, object_name, nes_quantity, hi_id, people_name FROM NecessaryObject 
            NATURAL JOIN Object NATURAL JOIN home_isolation NATURAL JOIN ATK NATURAL JOIN People
            WHERE (nes_id like '%$key%' or object_id like '%$key%' or object_name like '%$key%' or nes_quantity like '%$key%' 
                   or hi_id like '%$key%' or people_name like '%$key%')";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $NESid = $my_row['nes_id'];
                $OBJid = $my_row['object_id'];
                $OBJname = $my_row['object_name'];
                $NESquantity = $my_row['nes_quantity'];
                $HIid = $my_row['hi_id'];
                $PPname = $my_row['people_name'];
                $searchlist[] = new NesObject($NESid, $OBJid, $OBJname, $NESquantity, $HIid, $PPname);
            }
            require("connection_close.php");
            return $searchlist;
        }
        public static function update($NESid, $OBJid, $NESquantity, $HIid){
            require("connection_connect.php");
            $sql = "UPDATE NecessaryObject
            SET nes_quantity = '$NESquantity', object_id = '$OBJid', hi_id = '$HIid'
            WHERE nes_id = '$NESid'";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "Update SUCCESS!";
        }
        public static function delete($NESid){
            require("connection_connect.php");
            $sql = "DELETE From NecessaryObject
            WHERE nes_id = '$NESid'";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "Delete SUCCESS!";
        }
    }
    ?>