<?php

class get_Model
{

    public $num1, $num2, $num3, $num4;



    // =============================================================================================================================================__construct

    public function __construct($num1, $num2, $num3, $num4)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->num3 = $num3;
        $this->num4 = $num4;
    }

    public static function getsum_pt()
    {

        require("connection_connect.php");
        $sql1 = "SELECT COUNT(`admit_fh_id`) as num1  FROM admit_fh  ";
        $result = $conn->query($sql1);
        $my_row1 = $result->fetch_assoc();

        $num1 = $my_row1['num1'];
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $sql2 = "SELECT COUNT(`admit_fh_id`) as num2  FROM admit_fh as am INNER JOIN  ATK as atk ON am.atk_id = atk.atk_id
        WHERE atk.status_atk_id = 'SA001'";
        $result = $conn->query($sql2);
        $my_row2 = $result->fetch_assoc();

        $num2 = $my_row2['num2'];
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $sql3 = "SELECT COUNT(`admit_fh_id`) as num3  FROM admit_fh as am INNER JOIN  ATK as atk ON am.atk_id = atk.atk_id
        WHERE atk.status_atk_id = 'SA002'";
        $result = $conn->query($sql3);
        $my_row3 = $result->fetch_assoc();


        $num3 = $my_row3['num3'];
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $sql4 = "SELECT COUNT(`admit_fh_id`) as num4  FROM admit_fh as am INNER JOIN  ATK as atk ON am.atk_id = atk.atk_id
        WHERE atk.status_atk_id = 'SA003'";
        $result = $conn->query($sql4);
        $my_row4 = $result->fetch_assoc();


        $num4 = $my_row4['num4'];




        require("connection_close.php");
        return new get_Model($num1, $num2, $num3, $num4);
    }

    public static function getsumone_pt($key)
    {

        require("connection_connect.php");
        $sql1 = "SELECT COUNT(`admit_fh_id`) as num1 FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name ,step.status_atk_id as status_atk_id, am.atk_id as atk_id ,step.color as color FROM admit_fh as am
        INNER JOIN 
        (SELECT stepn.atk_id as atk_id ,people_name,stepn.status_atk_id as status_atk_id,stepn.color as color FROM   People as p 
        INNER JOIN (SELECT atk_id,atk.status_atk_id,color,people_id FROM ATK as atk
        INNER JOIN StatusATK as sa ON sa.status_atk_id = atk.status_atk_id) 
        
        as stepn  ON p.people_id = stepn.people_id)
        as step ON step.atk_id = am.atk_id)as step1 ON step1.field_hospital_id = fh.field_hospital_id

        WHERE admit_fh_id like '%$key%' or fh_name like '%$key%' or date like '%$key%'or step1.people_name like '%$key%'or step1.atk_id  like '%$key%' or step1.color  like '%$key%'";
        $result = $conn->query($sql1);
        $my_row1 = $result->fetch_assoc();

        $num1 = $my_row1['num1'];
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $sql2 = "SELECT COUNT(`admit_fh_id`) as num2 FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name ,step.status_atk_id as status_atk_id, am.atk_id as atk_id ,step.color as color FROM admit_fh as am
        INNER JOIN 
        (SELECT stepn.atk_id as atk_id ,people_name,stepn.status_atk_id as status_atk_id,stepn.color as color FROM   People as p 
        INNER JOIN (SELECT atk_id,atk.status_atk_id,color,people_id FROM ATK as atk
        INNER JOIN StatusATK as sa ON sa.status_atk_id = atk.status_atk_id) 
        
        as stepn  ON p.people_id = stepn.people_id)
        as step ON step.atk_id = am.atk_id)as step1 ON step1.field_hospital_id = fh.field_hospital_id

        WHERE step1.status_atk_id = 'SA001' AND (admit_fh_id like '%$key%' or fh_name like '%$key%' or date like '%$key%'or step1.people_name like '%$key%'or step1.atk_id  like '%$key%' or step1.color  like '%$key%')";
        $result = $conn->query($sql2);
        $my_row2 = $result->fetch_assoc();

        $num2 = $my_row2['num2'];
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $sql3 = "SELECT COUNT(`admit_fh_id`) as num3 FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name ,step.status_atk_id as status_atk_id, am.atk_id as atk_id ,step.color as color FROM admit_fh as am
        INNER JOIN 
        (SELECT stepn.atk_id as atk_id ,people_name,stepn.status_atk_id as status_atk_id,stepn.color as color FROM   People as p 
        INNER JOIN (SELECT atk_id,atk.status_atk_id,color,people_id FROM ATK as atk
        INNER JOIN StatusATK as sa ON sa.status_atk_id = atk.status_atk_id) 
        
        as stepn  ON p.people_id = stepn.people_id)
        as step ON step.atk_id = am.atk_id)as step1 ON step1.field_hospital_id = fh.field_hospital_id

        WHERE step1.status_atk_id = 'SA002' AND (admit_fh_id like '%$key%' or fh_name like '%$key%' or date like '%$key%'or step1.people_name like '%$key%'or step1.atk_id  like '%$key%' or step1.color  like '%$key%')";
        $result = $conn->query($sql3);
        $my_row3 = $result->fetch_assoc();


        $num3 = $my_row3['num3'];
        ///////////////////////////////////////////////////////////////////////////////////////////////////////
        $sql4 = "SELECT COUNT(`admit_fh_id`) as num4 FROM Field_hospital as fh
        INNER JOIN 
        (SELECT `admit_fh_id`,`field_hospital_id`,`date`,`time`,step.people_name as people_name ,step.status_atk_id as status_atk_id, am.atk_id as atk_id ,step.color as color FROM admit_fh as am
        INNER JOIN 
        (SELECT stepn.atk_id as atk_id ,people_name,stepn.status_atk_id as status_atk_id,stepn.color as color FROM   People as p 
        INNER JOIN (SELECT atk_id,atk.status_atk_id,color,people_id FROM ATK as atk
        INNER JOIN StatusATK as sa ON sa.status_atk_id = atk.status_atk_id) 
        
        as stepn  ON p.people_id = stepn.people_id)
        as step ON step.atk_id = am.atk_id)as step1 ON step1.field_hospital_id = fh.field_hospital_id

        WHERE step1.status_atk_id = 'SA003' AND (admit_fh_id like '%$key%' or fh_name like '%$key%' or date like '%$key%'or step1.people_name like '%$key%'or step1.atk_id  like '%$key%' or step1.color  like '%$key%')";
        $result = $conn->query($sql4);
        $my_row4 = $result->fetch_assoc();


        $num4 = $my_row4['num4'];




        require("connection_close.php");
        return new get_Model($num1, $num2, $num3, $num4);
    }



    public static function getsum_dis()
    {

         
        require("connection_connect.php");
        $sql = "SELECT SUM(`green`) as green ,SUM(`yellow`) as yellow ,SUM(`red`) as red ,COUNT(`field_hospital_id`) as num  FROM Field_hospital as f ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

            $num = $my_row['num'];
            $green = $my_row['green'];
            $yellow = $my_row['yellow'];
            $red = $my_row['red'];
        

            $sql1 = "SELECT COUNT(`admit_fh_id`) as num1 FROM `admit_fh` as am
            INNER JOIN ATK ON ATK.atk_id = am.atk_id
            WHERE ATK.status_atk_id = 'SA001' ";
            $result1 = $conn->query($sql1);
            $my_row1 = $result1->fetch_assoc();
    
            $num1 = $my_row1['num1'];
            $green = (string)(intval($green) - intval($num1));


            $sql2 = "SELECT COUNT(`admit_fh_id`) as num2 FROM `admit_fh` as am
            INNER JOIN ATK ON ATK.atk_id = am.atk_id
            WHERE ATK.status_atk_id = 'SA002' ";
            $result2 = $conn->query($sql2);
            $my_row2 = $result2->fetch_assoc();
    
            $num2 = $my_row2['num2'];
            $yellow = (string)(intval($yellow) - intval($num2));


            $sql3 = "SELECT COUNT(`admit_fh_id`) as num3 FROM `admit_fh` as am
            INNER JOIN ATK ON ATK.atk_id = am.atk_id
            WHERE ATK.status_atk_id = 'SA003' ";
            $result3 = $conn->query($sql3);
            $my_row3 = $result3->fetch_assoc();
    
            $num3 = $my_row3['num3'];
            $red = (string)(intval($red) - intval($num3));
            

        require("connection_close.php");
        return new get_Model($num, $green, $yellow, $red);
    }

    // public static function getsum_dis2($key)
    // {
    //     require("connection_connect.php");


         
        
    //     $sql = "SELECT SUM(`green`) as green ,SUM(`yellow`) as yellow ,SUM(`red`) as red ,COUNT(`field_hospital_id`) as num   FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id
    //     ";
    //     $result = $conn->query($sql);
    //     $my_row = $result->fetch_assoc();

    //         $field_hospital_id = $my_row['field_hospital_id'];
    //         $num = $my_row['num'];
    //         $green = $my_row['green'];
    //         $yellow = $my_row['yellow'];
    //         $red = $my_row['red'];
        

    //         $sql1 = "SELECT COUNT(`admit_fh_id`) as num1 FROM `admit_fh` as am
    //         INNER JOIN ATK ON ATK.atk_id = am.atk_id
    //         WHERE ATK.status_atk_id = 'SA001' AND field_hospital_id = '$field_hospital_id' ";
    //         $result1 = $conn->query($sql1);
    //         $my_row1 = $result1->fetch_assoc();
    
    //         $num1 = $my_row1['num1'];
    //         $green = (string)(intval($green) - intval($num1));


    //         $sql2 = "SELECT COUNT(`admit_fh_id`) as num2 FROM `admit_fh` as am
    //         INNER JOIN ATK ON ATK.atk_id = am.atk_id
    //         WHERE ATK.status_atk_id = 'SA002' AND field_hospital_id = '$field_hospital_id'";
    //         $result2 = $conn->query($sql2);
    //         $my_row2 = $result2->fetch_assoc();
    
    //         $num2 = $my_row2['num2'];
    //         $yellow = (string)(intval($yellow) - intval($num2));


    //         $sql3 = "SELECT COUNT(`admit_fh_id`) as num3 FROM `admit_fh` as am
    //         INNER JOIN ATK ON ATK.atk_id = am.atk_id
    //         WHERE ATK.status_atk_id = 'SA003' AND field_hospital_id = '$field_hospital_id' ";
    //         $result3 = $conn->query($sql3);
    //         $my_row3 = $result3->fetch_assoc();
    
    //         $num3 = $my_row3['num3'];
    //         $red = (string)(intval($red) - intval($num3));
            

    //     require("connection_close.php");
    //     return new get_Model($num, $green, $yellow, $red);
    // }

    
}
