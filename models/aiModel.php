<?php

class aiModel{
    public function __construct (){

    }

    public static function getid($key,$key_id){

        require("connection_connect.php");
        $sql = "SELECT MAX($key_id) as id FROM $key";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $id = $my_row['id'];

        $head = substr($id, 0 ,2);
        $tail = substr($id, -3);


        if(substr($tail, -1) == 9){
            if(substr($tail, 1,1) == 9){
                $x = (string)(intval(substr($tail, 0,1))+1);
                $y = '0';
                $z = '0';
                $tail = $x.$y.$z;
            }else{
                $x = substr($tail, 0,1);
                $y = (string)(intval(substr($tail, 1,1))+1);
                $z = '0';
                $tail = $x.$y.$z;
            }
        }else{
            $x = substr($tail, 0,1);
            $y = substr($tail, 1,1);
            $z = (string)(intval(substr($tail, 2,1))+1);
            $tail = $x.$y.$z;

        }

        $id = $head.$tail;

        require("connection_close.php");

        return $id;

    }



}



?>
