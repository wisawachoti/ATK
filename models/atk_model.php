<?php

class atk_Model
{

    public $atk_id,$people_id,$people_name,$status_atk_id,$ws_id,$time,$date;



    // =============================================================================================================================================__construct

    public function __construct($atk_id,$people_id,$status_atk_id,$ws_id,$time,$date,$people_name)
    {
        $this->atk_id =$atk_id;
        $this->people_id = $people_id;
        $this->status_atk_id = $status_atk_id;
        $this->ws_id =$ws_id;
        $this->time = $time;
        $this->date =$date;
        $this->people_name =$people_name;

    }

    public static function getAll()
    {

        $atkList = [];
        require("connection_connect.php");
        $sql = "SELECT `atk_id`, p.people_id as people_id,`status_atk_id`,`ws_id`,`time`,`date`, people_name FROM `ATK` as atk 
        INNER JOIN People as p ON atk.people_id = p.people_id";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $atk_id =$my_row['atk_id'];
            $people_id = $my_row['people_id'];

            $status_atk_id = $my_row['status_atk_id'];
            $ws_id = $my_row['ws_id'];

            $time = $my_row['time'];
            $date = $my_row['date'];
            $people_name = $my_row['people_name'];
            $atkList[] = new  atk_Model($atk_id,$people_id,$status_atk_id,$ws_id,$time,$date,$people_name);
        }
        require("connection_close.php");

        return $atkList;
    }



}