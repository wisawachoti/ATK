<?php

class patient_Model
{

    public $admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id,$color;



    // =============================================================================================================================================__construct

    public function __construct($admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id,$color)
    {
        $this->admit_fh_id =$admit_fh_id;
        $this->fh_name = $fh_name;
        $this->people_name = $people_name;
        $this->atk_id =$atk_id;
        $this->date = $date;
        $this->color =$color;

    }

    public static function getAll()
    {

        $ptList = [];
        require("connection_connect.php");
        $sql = "SELECT `admit_fh_id`,`fh_name`,`date`,`time`,step1.people_name as people_name,step1.atk_id as atk_id ,step1.status_atk_id as status_atk_id  ,step1.color as color FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name ,step.status_atk_id as status_atk_id, am.atk_id as atk_id ,step.color as color FROM admit_fh as am
        INNER JOIN 
        (SELECT stepn.atk_id as atk_id ,people_name,stepn.status_atk_id as status_atk_id,stepn.color as color FROM   People as p 
        INNER JOIN (SELECT atk_id,atk.status_atk_id,color,people_id FROM ATK as atk
        INNER JOIN StatusATK as sa ON sa.status_atk_id = atk.status_atk_id) 
        
        as stepn  ON p.people_id = stepn.people_id)
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

            $color = $my_row['color']; 

            $ptList[] = new  patient_Model($admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id,$color);
        }
        require("connection_close.php");

        return $ptList;
    }


    public static function Add($admit_fh_id,$fh_id,$atk_id,$date,$time)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `admit_fh`(`admit_fh_id`, `field_hospital_id`, `atk_id`, `date`) 
        VALUES('$admit_fh_id', '$fh_id', '$atk_id','$date')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }

    // =============================================================================================================================================__search

    public static function search($key)
    {

        $ptList = [];
        require("connection_connect.php");

        $sql = "SELECT `admit_fh_id`,`fh_name`,`date`,`time`,step1.people_name as people_name,step1.atk_id as atk_id ,step1.status_atk_id as status_atk_id  ,step1.color as color FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name ,step.status_atk_id as status_atk_id, am.atk_id as atk_id ,step.color as color FROM admit_fh as am
        INNER JOIN 
        (SELECT stepn.atk_id as atk_id ,people_name,stepn.status_atk_id as status_atk_id,stepn.color as color FROM   People as p 
        INNER JOIN (SELECT atk_id,atk.status_atk_id,color,people_id FROM ATK as atk
        INNER JOIN StatusATK as sa ON sa.status_atk_id = atk.status_atk_id) 
        
        as stepn  ON p.people_id = stepn.people_id)
        as step ON step.atk_id = am.atk_id)as step1 ON step1.field_hospital_id = fh.field_hospital_id


         WHERE (admit_fh_id like '%$key%' or fh_name like '%$key%' or date like '%$key%'or step1.people_name like '%$key%'or step1.atk_id  like '%$key%' or step1.color  like '%$key%') 
         ";
         
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $admit_fh_id =$my_row['admit_fh_id'];
            $fh_name = $my_row['fh_name'];

            $people_name = $my_row['people_name'];
            $date = $my_row['date'];

            $time = $my_row['time'];
            $atk_id = $my_row['atk_id'];

            $color = $my_row['color']; 

            $ptList[] = new  patient_Model($admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id,$color);
        }
        require("connection_close.php");

        return $ptList;
    }


    // =============================================================================================================================================__get

    public static function get($key)
    {
        require("connection_connect.php");
        $sql = "SELECT `admit_fh_id`,`fh_name`,`date`,`time`,step1.people_name as people_name,step1.atk_id as atk_id ,step1.status_atk_id as status_atk_id  ,step1.color as color FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name ,step.status_atk_id as status_atk_id, am.atk_id as atk_id ,step.color as color FROM admit_fh as am
        INNER JOIN 
        (SELECT stepn.atk_id as atk_id ,people_name,stepn.status_atk_id as status_atk_id,stepn.color as color FROM   People as p 
        INNER JOIN (SELECT atk_id,atk.status_atk_id,color,people_id FROM ATK as atk
        INNER JOIN StatusATK as sa ON sa.status_atk_id = atk.status_atk_id) 
        
        as stepn  ON p.people_id = stepn.people_id)
        as step ON step.atk_id = am.atk_id)as step1 ON step1.field_hospital_id = fh.field_hospital_id
        
        WHERE admit_fh_id = '$key' ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $admit_fh_id =$my_row['admit_fh_id'];
        $fh_name = $my_row['fh_name'];

        $people_name = $my_row['people_name'];
        $date = $my_row['date'];

        $time = $my_row['time'];
        $atk_id = $my_row['atk_id'];
    
    require("connection_close.php");

    return new  patient_Model($admit_fh_id,$fh_name,$people_name,$date,$time,$atk_id,$color);

      
    }


        // // =============================================================================================================================================__update

        public static function update($key,$admit_fh_id,$field_hospital_id,$atk_id,$date)
        {
            require("connection_connect.php");
            $sql = "UPDATE admit_fh 
            SET `admit_fh_id`='$admit_fh_id',`field_hospital_id`='$field_hospital_id',`atk_id`='$atk_id',`date`='$date'
            WHERE `admit_fh_id`='$key'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row";

        }


    // // =============================================================================================================================================__delete

    public static function delete($key)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM admit_fh  WHERE admit_fh_id = '$key' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }


 




}
