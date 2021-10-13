<?php
    class OBJ{
        public $OBJid;
        public $OBJname;
        public $OBJtype;
        public $OBJdesc;

        public function __construct ($OBJid, $OBJname, $OBJtype, $OBJdesc) {
            $this->OBJid = $OBJid;
            $this->OBJname = $OBJname;
            $this->OBJtype = $OBJtype;
            $this->OBJdesc = $OBJdesc;
        }
        public static function get($OBJid) {
            require("connection_connect.php");
            $sql = "SELECT * FROM Object
            WHERE object_id = '$OBJid'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            $OBJid = $my_row['object_id'];
            $OBJname = $my_row['object_name'];
            $OBJtype = $my_row['object_type'];
            $OBJdesc = $my_row['object_desc'];

            require("connection_close.php");
    
            return new OBJ($OBJid, $OBJname, $OBJtype, $OBJdesc);
        }
        public static function getAll(){
            $objectlist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Object
            ORDER BY object_id";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $OBJid = $my_row['object_id'];
                $OBJname = $my_row['object_name'];
                $OBJtype = $my_row['object_type'];
                $OBJdesc = $my_row['object_desc'];
                $objectlist[] = new OBJ($OBJid, $OBJname, $OBJtype, $OBJdesc);
            }
            require("connection_close.php");
            return $objectlist;
        }
        public static function addO($OBJid, $OBJname, $OBJtype, $OBJdesc){
            require("connection_connect.php");
            $sql = "INSERT INTO Object(object_id, object_name, object_type, object_desc)
            VALUES('$OBJid', '$OBJname', '$OBJtype', '$OBJdesc')";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "ADD SUCCESS!";
        }
        public static function search($key){
            $searchlist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM Object
            WHERE (object_id like '%$key%' or object_name like '%$key%' or object_type like '%$key%' or object_desc like '%$key%')";
            $result = $conn -> query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $OBJid = $my_row['object_id'];
                $OBJname = $my_row['object_name'];
                $OBJtype = $my_row['object_type'];
                $OBJdesc = $my_row['object_desc'];
                $searchlist[] = new OBJ($OBJid, $OBJname, $OBJtype, $OBJdesc);
            }
            require("connection_close.php");
            return $searchlist;
        }
        public static function update($OBJid, $OBJname, $OBJtype, $OBJdesc){
            require("connection_connect.php");
            $sql = "UPDATE Object
            SET object_name = '$OBJname', object_type = '$OBJtype', object_desc = '$OBJdesc'
            WHERE object_id = '$OBJid'";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "Update SUCCESS!";
        }
        public static function delete($OBJid){
            require("connection_connect.php");
            $sql = "DELETE From Object
            WHERE object_id = '$OBJid'";
            $result = $conn -> query($sql);
            require("connection_close.php");
            return "Delete SUCCESS!";
        }
    }
    ?>