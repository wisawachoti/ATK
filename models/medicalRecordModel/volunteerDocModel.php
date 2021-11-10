<?php

    class volunteerDoc
    {
        public $vd_id ,$vd_name ;

        public function __construct($id,$name)
        {
            $this->vd_id = $id ;
            $this->vd_name = $name ;
        }

        public static function getAll()
        {
            $doclist = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM volunteer_doc";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $id = $my_row['vd_id'];
                $vd_name = $my_row['vd_name'];
                $doclist[] = new volunteerDoc($id,$vd_name);
            }
            require("connection_close.php");

            return $doclist;
        }




    }




?>