<?php

    class medicalRecordController
    {
        public function index()
        {
            $medrecList = medicalRecord::getAll();
            require_once("views/medicalRecord/index_medicalRecord.php");
        }

        public function newMedicalRecord()
        {
            $medrec = aiModel::getid("medical_record","medRecord_id");
            $medList = medicine::getAll();
            $docList = volunteerDoc::getAll();
            $spList = symptoms::getAll();
            require_once("views/medicalRecord/newMedicalRecord.php");
        }

        public function addMedicalRecord()
        {
            $medrec_id = $_GET['medRecord_id'];
            $med_id = $_GET['med_id'];
            $quantity = $_GET['quantity'];
            $vd_id = $_GET['vd_id'];
            $comment = $_GET['comment'];
            $recordDate = $_GET['recordDate'];
            $recordTime = $_GET['recordTime'];
            $sp = $_GET['sp_id'];

            medicalRecord::addMedicalRecord($medrec_id,$quantity,$comment,$recordDate,$recordTime,$med_id,$vd_id,$sp);
            medicalRecordController::index();
        }

        public function search()
        {
            $key = $_GET['key'];
            if($key == NULL)
            {
                medicalRecordController::index();
            }
            else
            {
                $medrecList = medicalRecord::searchMedicalRecord($key);
                require_once("views/medicalRecord/index_medicalRecord.php");
            }
            

        }

        public function updateForm()
        {
            $medrec_id = $_GET['medRecord_id'];
            $quantity = $_GET['quantity'];
            $comment = $_GET['comment'];
            $recordDate = $_GET['recordDate'];
            $recordTime = $_GET['recordTime'];
            $med_id = $_GET['med_id'];
            $vd_id = $_GET['vd_id'];
            $sp_id = $_GET['sp_id'];

            $medList = medicine::getAll();
            $docList = volunteerDoc::getAll();
            $spList = symptoms::getAll();
            

            require_once("views/medicalRecord/updateFormMedicalRecord.php");
        }

        public function updateMedicalRecord()
        {
            $id = $_GET['medRecord_id'];
            $sp_id = $_GET['sp_id'];
            $med_id = $_GET['med_id'];
            $quantity = $_GET['quantity'];
            $vd_id = $_GET['vd_id'];
            $recordDate = $_GET['recordDate'];
            $recordTime = $_GET['recordTime'];
            $comment = $_GET['comment'];

            medicalRecord::updateMedicalRecord($id,$quantity,$comment,$recordDate,$recordTime,$med_id,$vd_id,$sp_id);
            medicalRecordController::index();
        }

        public function deleteConfirm()
        {
            $medrec_id = $_GET['medRecord_id'];
            $sp_id = $_GET['sp_id'];
            $people_name = $_GET['people_name'];
            $med_id = $_GET['med_id'];
            $med_name = $_GET['med_name'];
            $vd_id = $_GET['vd_id'];
            $vd_name = $_GET['vd_name'];

            require_once("views/medicalRecord/deleteConfirm.php");
        }

        public function deleteMedicalRecord()
        { 
            $id = $_GET['medRecord_id'];
            
            medicalRecord::deleteMedicalRecord($id);
            medicalRecordController::index();

        }
    }





?>