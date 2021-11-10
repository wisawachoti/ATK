<?php

    class medicalRecord
    {

        public $mr_id , $med_id , $sp_id ,$quantity , $comment , $recordDate , $recordTime , $med_name , $vd_id , $vd_name , $people_name , $color , $status ;

        public function __construct($mr_id , $med_id, $med_name , $quantity , $people_name ,$status, $color , $vd_name , $comment , $recordDate , $recordTime , $sp_id , $vd_id)
        {
            $this->mr_id = $mr_id ;
            $this->med_id = $med_id ;
            $this->med_name = $med_name ;
            $this->quantity = $quantity ;
            $this->people_name = $people_name ;
            $this->status = $status ;
            $this->color = $color ;
            $this->vd_name = $vd_name ;
            $this->comment = $comment ;
            $this->recordDate = $recordDate ;
            $this->recordTime = $recordTime ;
            $this->sp_id = $sp_id ;
            $this->vd_id = $vd_id ;
        }

        public static function get($id)
        {
            require("connection_connect.php");
            $sql = "SELECT * FROM medical_record 
            JOIN medicine USING (med_id)
            JOIN volunteer_doc USING (vd_id)
            JOIN symptoms_fh USING (symptoms_fh_id)
            JOIN admit_fh USING (admit_fh_id)
            JOIN ATK USING (atk_id)
            JOIN People USING (people_id)
            JOIN StatusATK USING (status_atk_id)
            where medRecord_id = '$id'";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();
            
            $mr_id = $my_row['medRecord_id'];
            $med_id = $my_row['med_id'];
            $med_name = $my_row['med_name'];
            $quantity = $my_row['quantity'];
            $people_name = $my_row['people_name'];
            $status = $my_row['status'];
            $color = $my_row['color'];
            $vd_name = $my_row['vd_name'];
            $comment = $my_row['comment'];
            $recordDate = $my_row['recordDate'];
            $recordTime = $my_row['recordTime'];
            $sp_id = $my_row['symptoms_fh_id'];
            $vd_id = $my_row['vd_id'];

            require("connection_close.php");

            new medicalRecord($mr_id , $med_id, $med_name , $quantity , $people_name ,$status, $color , $vd_name , $comment , $recordDate , $recordTime,$sp_id,$vd_id);

        }

        public static function getAll()
        {
            $medrecList = [] ;

            require("connection_connect.php");
            $sql = "SELECT * FROM medical_record 
            JOIN medicine USING (med_id)
            JOIN volunteer_doc USING (vd_id)
            JOIN symptoms_fh USING (symptoms_fh_id)
            JOIN admit_fh USING (admit_fh_id)
            JOIN ATK USING (atk_id)
            JOIN People USING (people_id)
            JOIN StatusATK USING (status_atk_id)";
            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $mr_id = $my_row['medRecord_id'];
                $med_id = $my_row['med_id'];
                $med_name = $my_row['med_name'];
                $quantity = $my_row['quantity'];
                $people_name = $my_row['people_name'];
                $status = $my_row['status'];
                $color = $my_row['color'];
                $vd_name = $my_row['vd_name'];
                $comment = $my_row['comment'];
                $recordDate = $my_row['recordDate'];
                $recordTime = $my_row['recordTime'];
                $sp_id = $my_row['symptoms_fh_id'];
                $vd_id = $my_row['vd_id'];
                $medrecList[] = new medicalRecord($mr_id , $med_id, $med_name , $quantity , $people_name ,$status, $color , $vd_name , $comment , $recordDate , $recordTime,$sp_id,$vd_id);

            }
            require("connection_close.php");
            return $medrecList;
        }

        public static function addMedicalRecord($mr_id,$quantity,$comment,$recordDate,$recordTime,$med_id,$vd_id,$sp_id)
        {
            require("connection_connect.php");
            $sql = "INSERT into medical_record(medRecord_id,quantity,comment,recordDate,recordTime,med_id,vd_id,symptoms_fh_id)
            values('$mr_id' , '$quantity', '$comment' , '$recordDate' ,'$recordTime', '$med_id' , '$vd_id' , '$sp_id')";
            $result = $conn->query($sql);
            require("connection_close.php");

            return "add success $result rows";
        }
        
        public static function searchMedicalRecord($key)
        {
            $medrecList = [] ;

            require("connection_connect.php");
            $sql = "SELECT * FROM medical_record 
            JOIN medicine USING (med_id)
            JOIN volunteer_doc USING (vd_id)
            JOIN symptoms_fh USING (symptoms_fh_id)
            JOIN admit_fh USING (admit_fh_id)
            JOIN ATK USING (atk_id)
            JOIN People USING (people_id)
            JOIN StatusATK USING (status_atk_id)
            WHERE (medRecord_id like '%$key%' or symptoms_fh_id like '%$key%' or people_name like '%$key%' or med_id like '%$key%' or med_name like '%$key%' or quantity like '%$key' 
            or status like '%$key%' or color like '%$key%' or vd_id like '%$key%' or vd_name like '%$key%' or comment like '%$key%' or recordDate like '%$key%' or recordTime like '%$key%')";

            $result = $conn->query($sql);
            while($my_row = $result->fetch_assoc())
            {
                $mr_id = $my_row['medRecord_id'];
                $med_id = $my_row['med_id'];
                $med_name = $my_row['med_name'];
                $quantity = $my_row['quantity'];
                $people_name = $my_row['people_name'];
                $status = $my_row['status'];
                $color = $my_row['color'];
                $vd_name = $my_row['vd_name'];
                $comment = $my_row['comment'];
                $recordDate = $my_row['recordDate'];
                $recordTime = $my_row['recordTime'];
                $sp_id = $my_row['symptoms_fh_id'];
                $vd_id = $my_row['vd_id'];
                $medrecList[] = new medicalRecord($mr_id,$med_id,$med_name,$quantity,$people_name,$status,$color,$vd_name,$comment,$recordDate,$recordTime,$sp_id,$vd_id);
            }
            require("connection_close.php");

            return $medrecList ;
        }

        public static function updateMedicalRecord($id,$quantity,$comment,$recordDate,$recordTime,$med_id,$vd_id,$sp_id)
        {
            require("connection_connect.php");
            $sql = "UPDATE medical_record SET quantity = '$quantity' , comment = '$comment' , recordDate = '$recordDate'
            ,recordTime = '$recordTime' , med_id = '$med_id' , vd_id = '$vd_id' , symptoms_fh_id = '$sp_id'
            WHERE medRecord_id = '$id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "update success $result row" ;
        }

        public static function deleteMedicalRecord($id)
        {
            require_once("connection_connect.php");
            $sql = "DELETE from medical_record WHERE medRecord_id = '$id'";
            $result = $conn->query($sql);
            require("connection_close.php");
            return "delete success $result row";
        }

    }



?>