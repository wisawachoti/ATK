<?php

    class medicinecontroller
    {
        public function index()
        {
            $medList = medicine::getAll();
            require_once('views/medicine/index_medicine.php');
        }

        public function newMedicine()
        {
            $medList = medicine::getAll();
            $med_id = aiModel::getid("medicine","med_id");
            require_once('views/medicine/newMedicine.php');
        }
        public function addMedicine()
        {
            $med_id = $_GET['med_id'];
            $med_name = $_GET['med_name'];
            $ppt = $_GET['properties'];
            $htu = $_GET['howToUse'];
            medicine::addMedicine($med_id,$med_name,$ppt,$htu);
            medicinecontroller::index();
        }
        public function search(){
            $key = $_GET['key'];
            $medList = medicine::searchMedicine($key);
            require_once('views/medicine/index_medicine.php');

        }
        public function updateForm()
        {
            $id = $_GET['med_id'];
            $name = $_GET['med_name'];
            $ppt = $_GET['properties'];
            $htu = $_GET['howToUse'];

            require_once("views/medicine/updateFormMedicine.php");

        }

        public function updateMedicine()
        {
            $id = $_GET['id'];
            $name = $_GET['name'];
            $ppt = $_GET['ppt'];
            $htu = $_GET['htu'];


            medicine::updateMedicine($id,$name,$ppt,$htu);
            medicinecontroller::index();

        }

        public function deleteConfirm()
        {
            $id = $_GET['med_id'];
            $name = $_GET['med_name'];

            require_once("views/medicine/deleteConfirm.php");
        }

        public function deleteMedicine()
        {
            $id = $_GET['med_id'];

            medicine::deleteMedicine($id);
            medicinecontroller::index();
        }
    }



?>