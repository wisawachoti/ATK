<?php

    class medicine
    {
        public $med_id , $med_name , $properties , $howToUse ;

        public function __construct($id,$name,$ppt,$htu)
        {
            $this->med_id = $id ;
            $this->med_name = $name ;
            $this->properties = $ppt ;
            $this->howToUse = $htu ;
        }

        public static function get($id)
        {
            require("connection_connect.php");
            $sql = "SELECT * FROM medicine where med_id = '$id' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();

            $id = $my_row['med_id'];
            $name = $my_row['med_name'];
            $ppt = $my_row['properties'];
            $htu = $my_row['howToUse'];

            require("connection_close.php");

            return new medicine($id,$name,$ppt,$htu);

        }

        public static function getAll()
        {
            $medList = [] ;

            require("connection_connect.php");
            $sql = "SELECT * FROM medicine";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $med_id = $my_row['med_id'];
                $med_name = $my_row['med_name'];
                $ppt = $my_row['properties'];
                $htu = $my_row['howToUse'];
                $medList[] = new medicine($med_id,$med_name,$ppt,$htu);

            }
            require("connection_close.php");
            return $medList;
        }

        public static function addMedicine($id,$name,$ppt,$htu)
        {
            require("connection_connect.php");
            $sql = "insert into medicine(med_id,med_name,properties,howToUse) values
            ('$id','$name','$ppt','$htu')";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "add success $result rows";
        }

        public static function searchMedicine($key)
        {
            require("connection_connect.php");
            $sql = "SELECT * FROM medicine
            where (med_id like '%$key%' or med_name like '%$key%' or properties like '%$key%' or howToUse like '%$key%')";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $id = $my_row['med_id'];
                $name = $my_row['med_name'];
                $ppt = $my_row['properties'];
                $htu = $my_row['howToUse'];
                $medList[] = new medicine($id,$name,$ppt,$htu);
            }
            require("connection_close.php");

            return $medList ;
        }

        public static function updateMedicine($id,$name,$ppt,$htu)
        {
            require("connection_connect.php");
            $sql = "UPDATE medicine SET med_name = '$name' , properties = '$ppt' , howToUse = '$htu'
            where med_id = '$id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";
        }

        public static function deleteMedicine($id)
        {
            require_once("connection_connect.php");
            $sql = "DELETE FROM medicine Where med_id = '$id'";
            $result = $conn->query($sql);
            require_once("connection_close.php");
            return "delete success $result row";
        }

    }

?>