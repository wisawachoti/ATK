<?php

class aiModel{


    public function __construct (){

    }

    public static function getid($key,$key_id){
       
        require("connection_connect.php");
        $sql = "SELECT MAX('$key_id') as id FROM '$key'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $id = $my_row['id'];

        require("connection_close.php");

        return $id;
    }

}



?>