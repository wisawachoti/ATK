<?php

class fh_Model
{

    public $field_hospital_id, $fh_name, $green, $yellow, $red, $agency;



    // =============================================================================================================================================__construct

    public function __construct($field_hospital_id, $fh_name, $green, $yellow, $red, $agency)
    {
        $this->field_hospital_id = $field_hospital_id;
        $this->fh_name = $fh_name;
        $this->green  = $green;
        $this->yellow  = $yellow;
        $this->red  =  $red;
        $this->agency =  $agency;
    }

    // =============================================================================================================================================__get

    public static function get($key)
    {
        require("connection_connect.php");
        $sql = "SELECT `field_hospital_id`,`fh_name`,`green`,`yellow`,`red`,a.agency_name as agency FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id 
                    WHERE `field_hospital_id`='$key' ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $field_hospital_id = $my_row['field_hospital_id'];
        $fh_name = $my_row['fh_name'];
        $green = $my_row['green'];
        $yellow = $my_row['yellow'];
        $red = $my_row['red'];
        $agency = $my_row['agency'];

        require("connection_close.php");

        return new fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red, $agency);
    }

    // =============================================================================================================================================__search

    public static function search($key)
    {

        $fhList = [];
        require("connection_connect.php");

        $sql = "SELECT `field_hospital_id`,`fh_name`,`green`,`yellow`,`red`,a.agency_name as agency FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id  
             WHERE (field_hospital_id like '%$key%' or fh_name like '%$key%' or a.agency_name like '%$key%') ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $field_hospital_id = $my_row['field_hospital_id'];
            $fh_name = $my_row['fh_name'];
            $green = $my_row['green'];
            $yellow = $my_row['yellow'];
            $red = $my_row['red'];
            $agency = $my_row['agency'];


            $fhList[] = new  fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red, $agency);
        }
        require("connection_close.php");

        return $fhList;
    }

    // // =============================================================================================================================================__update

    public static function update($key, $field_hospital_id, $fh_name, $green, $yellow, $red, $agency)
    {
        require("connection_connect.php");
        $sql = "UPDATE Field_hospital 
            SET `field_hospital_id`='$field_hospital_id',`fh_name`='$fh_name',`green`=$green,`yellow`=$yellow,`red`= $red,`agency_id`='$agency'
            WHERE `field_hospital_id`='$key'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }

    // // =============================================================================================================================================__delete

    public static function delete($key)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM Field_hospital  WHERE field_hospital_id = '$key' ";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }


    public static function getAll()
    {

        $fhList = [];
        require("connection_connect.php");
        $sql = "SELECT `field_hospital_id`,`fh_name`,`green`,`yellow`,`red`,a.agency_name as agency FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $field_hospital_id = $my_row['field_hospital_id'];
            $fh_name = $my_row['fh_name'];
            $green = $my_row['green'];
            $yellow = $my_row['yellow'];
            $red = $my_row['red'];
            $agency = $my_row['agency'];


            $fhList[] = new  fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red, $agency);
        }
        require("connection_close.php");

        return $fhList;
    }

    public static function getsum()
    {

        require("connection_connect.php");
        $sql = "SELECT SUM(`green`) as green ,SUM(`yellow`) as yellow ,SUM(`red`) as red ,COUNT(`field_hospital_id`) as num  FROM Field_hospital as f ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $num = $my_row['num'];
        $green = $my_row['green'];
        $yellow = $my_row['yellow'];
        $red = $my_row['red'];


        require("connection_close.php");
        return new fh_Model($num, $num, $green, $yellow, $red, $num);
    }

    public static function getsumone($key)
    {

        require("connection_connect.php");
        $sql = "SELECT SUM(`green`) as green ,SUM(`yellow`) as yellow ,SUM(`red`) as red ,COUNT(`field_hospital_id`) as num  FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id
        WHERE (field_hospital_id like '%$key%' or fh_name like '%$key%' or a.agency_name like '%$key%')";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $num = $my_row['num'];
        $green = $my_row['green'];
        $yellow = $my_row['yellow'];
        $red = $my_row['red'];


        require("connection_close.php");
        return new fh_Model($num, $num, $green, $yellow, $red, $num);
    }


    public static function Add($field_hospital_id, $fh_name, $green, $yellow, $red, $agency_id)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Field_hospital`(`field_hospital_id`, `fh_name`, `green`, `yellow`, `red`,`agency_id`) 
        VALUES('$field_hospital_id', '$fh_name', $green, $yellow, $red,'$agency_id')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return;
    }


    public static function getAlldis()
    {

        $fhList = [];
        require("connection_connect.php");
        $sql = "SELECT `field_hospital_id`,`fh_name`,`green`,`yellow`,`red`,a.agency_name as agency FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {


            $field_hospital_id = $my_row['field_hospital_id'];
            $fh_name = $my_row['fh_name'];
            $green = $my_row['green'];
            $yellow = $my_row['yellow'];
            $red = $my_row['red'];
            $agency = $my_row['agency'];

            //////////////////////////////////////////////////////////////////////////
            $sql1 = "SELECT COUNT(`admit_fh_id`) as num FROM `admit_fh` as am
        INNER JOIN ATK ON ATK.atk_id = am.atk_id
        WHERE ATK.status_atk_id = 'SA001' AND field_hospital_id = '$field_hospital_id' ";
            $result1 = $conn->query($sql1);
            $my_row1 = $result1->fetch_assoc();


            $num = $my_row1['num'];
            if (intval($num) >= 1) {
                $green = (string)(intval($green) - intval($num));
            }

            //////////////////////////////////////////////////////////////////////////
            $sql2 = "SELECT COUNT(`admit_fh_id`) as num2 FROM `admit_fh` as am
        INNER JOIN ATK ON ATK.atk_id = am.atk_id
        WHERE ATK.status_atk_id = 'SA002' AND field_hospital_id = '$field_hospital_id' ";
            $result2 = $conn->query($sql2);
            $my_row2 = $result2->fetch_assoc();


            $num2 = $my_row2['num2'];
            if (intval($num2) >= 1) {
                $yellow = (string)(intval($yellow) - intval($num2));
            }

            //////////////////////////////////////////////////////////////////////////
            $sql3 = "SELECT COUNT(`admit_fh_id`) as num FROM `admit_fh` as am
        INNER JOIN ATK ON ATK.atk_id = am.atk_id
        WHERE ATK.status_atk_id = 'SA003' AND field_hospital_id = '$field_hospital_id' ";
            $result3 = $conn->query($sql3);
            $my_row3 = $result3->fetch_assoc();


            $num3 = $my_row3['num'];
            if (intval($num3) >= 1) {
                $red = (string)(intval($red) - intval($num3));
            }


            $fhList[] = new  fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red, $agency);
        }
        require("connection_close.php");

        return $fhList;
    }


    public static function getdis($key)
    {


        $fhList = [];
        require("connection_connect.php");
        $sql = "SELECT `field_hospital_id`,`fh_name`,`green`,`yellow`,`red`,a.agency_name as agency FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id  
        WHERE (field_hospital_id like '%$key%' or fh_name like '%$key%' or a.agency_name like '%$key%') ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {


            $field_hospital_id = $my_row['field_hospital_id'];
            $fh_name = $my_row['fh_name'];
            $green = $my_row['green'];
            $yellow = $my_row['yellow'];
            $red = $my_row['red'];
            $agency = $my_row['agency'];

            //////////////////////////////////////////////////////////////////////////
            $sql1 = "SELECT COUNT(`admit_fh_id`) as num FROM `admit_fh` as am
        INNER JOIN ATK ON ATK.atk_id = am.atk_id
        WHERE ATK.status_atk_id = 'SA001' AND field_hospital_id = '$field_hospital_id' ";
            $result1 = $conn->query($sql1);
            $my_row1 = $result1->fetch_assoc();


            $num = $my_row1['num'];
            if (intval($num) >= 1) {
                $green = (string)(intval($green) - intval($num));
            }

            //////////////////////////////////////////////////////////////////////////
            $sql2 = "SELECT COUNT(`admit_fh_id`) as num2 FROM `admit_fh` as am
        INNER JOIN ATK ON ATK.atk_id = am.atk_id
        WHERE ATK.status_atk_id = 'SA002' AND field_hospital_id = '$field_hospital_id' ";
            $result2 = $conn->query($sql2);
            $my_row2 = $result2->fetch_assoc();


            $num2 = $my_row2['num2'];
            if (intval($num2) >= 1) {
                $yellow = (string)(intval($yellow) - intval($num2));
            }

            //////////////////////////////////////////////////////////////////////////
            $sql3 = "SELECT COUNT(`admit_fh_id`) as num FROM `admit_fh` as am
        INNER JOIN ATK ON ATK.atk_id = am.atk_id
        WHERE ATK.status_atk_id = 'SA003' AND field_hospital_id = '$field_hospital_id' ";
            $result3 = $conn->query($sql3);
            $my_row3 = $result3->fetch_assoc();


            $num3 = $my_row3['num'];
            if (intval($num3) >= 1) {
                $red = (string)(intval($red) - intval($num3));
            }


            $fhList[] = new  fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red, $agency);
        }
        require("connection_close.php");

        return $fhList;
    }
}
