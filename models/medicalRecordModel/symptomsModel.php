<?php

    class symptoms
    {
        public $sp_id ;

        public function __construct($id)
        {
            $this->sp_id = $id ;
        }

        public static function getAll()
        {
            $spList= [];

            require("connection_connect.php");
            $sql = "SELECT * FROM symptoms_fh";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $id = $my_row['symptoms_fh_id'];
                $spList[] = new symptoms($id);
            }
            require("connection_close.php");

            return $spList;

        }




    }





?>