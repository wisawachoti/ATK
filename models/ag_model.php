<?php

class ag_Model
{

    public $agency_id, $agency_name;



    // =============================================================================================================================================__construct

    public function __construct($agency_id, $agency_name)
    {
        $this->agency_name =$agency_name;
        $this->agency_id = $agency_id;

    }

    public static function getAll()
    {

        $agList = [];
        require("connection_connect.php");
        $sql = "SELECT `agency_id`,`agency_name` FROM agency";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $agency_id = $my_row['agency_id'];
            $agency_name= $my_row['agency_name'];

            $agList[] = new  ag_Model($agency_id , $agency_name);
        }
        require("connection_close.php");

        return $agList;
    }



}
