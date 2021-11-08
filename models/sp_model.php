<?php

class symptoms_Model
{

    public $symptoms_fh_id,$admit_fh_id,$temperature,$date;



    // =============================================================================================================================================__construct

    public function __construct($symptoms_fh_id,$admit_fh_id,$temperature,$date)
    {
        $this->symptoms_fh_id =$symptoms_fh_id;
        $this->admit_fh_id = $admit_fh_id;
        $this->temperature = $temperature;
        $this->date = $date;
        

    }

    public static function getAll()
    {

        $spList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `symptoms_fh`";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $symptoms_fh_id =$my_row['symptoms_fh_id'];
            $admit_fh_id = $my_row['admit_fh_id'];
            $temperature = $my_row['temperature'];
            $date = $my_row['date'];
            
            

            $spList[] = new  symptoms_Model($symptoms_fh_id,$admit_fh_id,$temperature,$date);
        }
        require("connection_close.php");

        return $spList;
    }


    public static function Add($id, $admit_fh_id, $temperature, $date)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `symptoms_fh`(`symptoms_fh_id`, `admit_fh_id`, `temperature`, `date`) 
        VALUES('$id', '$admit_fh_id', $temperature,'$date')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return ;
    }



    // =============================================================================================================================================__search

    public static function search($key)
    {

        $spList = [];
        require("connection_connect.php");

        $sql = "SELECT * FROM `symptoms_fh`
         WHERE (symptoms_fh_id like '%$key%' or admit_fh_id like '%$key%' or date like '%$key%'or temperature like '%$key%') ";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $symptoms_fh_id =$my_row['symptoms_fh_id'];
            $admit_fh_id = $my_row['admit_fh_id'];
            $temperature = $my_row['temperature'];
            $date = $my_row['date'];
            
            

            $spList[] = new  symptoms_Model($symptoms_fh_id,$admit_fh_id,$temperature,$date);
        }
        require("connection_close.php");

        return $spList;
    }


    // // =============================================================================================================================================__update

    public static function update($key,$symptoms_fh_id,$admit_fh_id,$temperature,$date)
    {
        require("connection_connect.php");
        $sql = "UPDATE symptoms_fh 
        SET `symptoms_fh_id`='$symptoms_fh_id',`admit_fh_id`='$admit_fh_id',`temperature`=$temperature,`date`='$date'
        WHERE `symptoms_fh_id`='$key'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";

    }



    // =============================================================================================================================================__get

    public static function get($key)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM symptoms_fh 
                WHERE `symptoms_fh_id`='$key' ";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();

        $symptoms_fh_id =$my_row['symptoms_fh_id'];
            $admit_fh_id = $my_row['admit_fh_id'];
            $temperature = $my_row['temperature'];
            $date = $my_row['date'];

        require("connection_close.php");

        return new  symptoms_Model($symptoms_fh_id,$admit_fh_id,$temperature,$date);
    }


       // // =============================================================================================================================================__delete

       public static function delete($key)
       {
           require("connection_connect.php");
           $sql = "DELETE FROM symptoms_fh  WHERE symptoms_fh_id = '$key' ";
           $result = $conn->query($sql);
           require("connection_close.php");
           return "delete success $result row";
       }

}