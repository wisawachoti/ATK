<?php

    class FinalTable
    {
        public $medrec_id , $med_id , $med_name ,  $fh_id , $fh_name , $recordDate , $recordTime , $people_name , $quantity;

        public function __construct()
        {
            
        }

        public static function getAll()
        {
            $fhList = [];
            require("connection_connect.php");
            $sql = "SELECT * FROM medical_record 
            JOIN medicine USING (med_id)
            JOIN volunteer_doc USING (vd_id)
            JOIN symptoms_fh USING (symptoms_fh_id)
            JOIN admit_fh USING (admit_fh_id)
            JOIN Field_hospital USING (field_hospital_id)
            JOIN ATK USING (atk_id)
            JOIN People USING (people_id)
            JOIN StatusATK USING (status_atk_id)";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                
                
            }

            require("connection_close.php");

            return $fhList ;
        }

    }


?>