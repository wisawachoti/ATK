<?php

class fh_Model
{

    public $field_hospital_id, $fh_name, $green, $yellow, $red ,$agency;



    // =============================================================================================================================================__construct

    public function __construct($field_hospital_id, $fh_name, $green, $yellow, $red,$agency)
    {
        $this->field_hospital_id =$field_hospital_id;
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

            return new fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red,$agency);
        }

    // =============================================================================================================================================__search

        public static function search($key)
        {

            $fhList = [];
            require("connection_connect.php");

            $sql = "SELECT `field_hospital_id`,`fh_name`,`green`,`yellow`,`red`,a.agency_name as agency FROM Field_hospital as f INNER JOIN agency as a ON f.agency_id = a.agency_id  
             WHERE (field_hospital_id like '%$key%' or fh_name like '%$key%' or a.agency_name like '%$key%') ";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $field_hospital_id = $my_row['field_hospital_id'];
                $fh_name = $my_row['fh_name'];
                $green = $my_row['green'];
                $yellow = $my_row['yellow'];
                $red = $my_row['red'];
                $agency = $my_row['agency'];
    

                $fhList[] = new  fh_Model($field_hospital_id, $fh_name, $green, $yellow, $red,$agency);

            }
            require("connection_close.php");

            return $fhList;
        }

    // // =============================================================================================================================================__update

        public static function update($key,$field_hospital_id, $fh_name, $green, $yellow, $red,$agency)
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

    //     public static function delete($detailid)
    //     {
    //         require("connection_connect.php");
    //         $sql = "DELETE FROM offerdetail WHERE offerdetail_id = $detailid ";
    //         $result = $conn->query($sql);
    //         require("connection_close.php");
    //         return "delete success $result row";
    //     }


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

    public static function Add($field_hospital_id, $fh_name, $green, $yellow, $red,$agency_id)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `Field_hospital`(`field_hospital_id`, `fh_name`, `green`, `yellow`, `red`,`agency_id`) 
        VALUES('$field_hospital_id', '$fh_name', $green, $yellow, $red,'$agency_id')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }


}
