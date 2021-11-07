<?php

class patient_Model
{

    public $admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id;



    // =============================================================================================================================================__construct

    public function __construct($admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id)
    {
        $this->admit_fh_id =$admit_fh_id;
        $this->fh_name = $fh_name;
        $this->people_name = $people_name;
        $this->atk_id =$atk_id;
        $this->date = $date;
        $this->time =$time;

    }

    public static function getAll()
    {

        $ptList = [];
        require("connection_connect.php");
        $sql = "SELECT `admit_fh_id`,`fh_name`,`date`,`time`,step1.people_name as people_name,step1.atk_id as atk_id FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name , am.atk_id as atk_id FROM admit_fh as am
        INNER JOIN 
        (SELECT atk.atk_id,people_name FROM ATK as atk 
        INNER JOIN People as p ON p.people_id = atk.people_id)
        as step ON step.atk_id = am.atk_id)as step1 ON step1.field_hospital_id = fh.field_hospital_id
        ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $admit_fh_id =$my_row['admit_fh_id'];
            $fh_name = $my_row['fh_name'];

            $people_name = $my_row['people_name'];
            $date = $my_row['date'];

            $time = $my_row['time'];
            $atk_id = $my_row['atk_id'];

            $ptList[] = new  patient_Model($admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id);
        }
        require("connection_close.php");

        return $ptList;
    }



}
