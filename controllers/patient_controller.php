<?php
class PateintController{

    
    public function index(){
        $ptList = patient_Model::getAll();
        $sumList = fh_Model::getsum();
        require_once('views/patient/index.php');
        
    }

    public function an(){
        $id = aiModel::getid("admit_fh","admit_fh_id");
        $atk = atk_Model::getAll();
        $fhlList = fh_Model::getAll();
        require_once('views/patient/add.php');
    }

    public function NEW(){
        $id = $_GET['id'];
        $Field_hospital = $_GET['Field_hospital'];
        $atk = $_GET['atk'];
        $date = $_GET['date'];
        $time = $_GET['time'];
        
        patient_Model::Add($id, $Field_hospital, $atk, $date, $time);
        PateintController::index();
    }

    public function BACK(){
        $ptList = patient_Model::getAll();
        $sumList = fh_Model::getsum();
        require_once('views/patient/index.php');
        
    }

    public function search()
    {
        $key = $_GET['key'];
        $ptList = patient_Model::search($key);
        require_once('views/patient/index.php');
    }

    public function upd()
    {
        
        $key = $_GET['key'];
        $ptList = patient_Model::get($key);
        $fhlList = fh_Model::getAll();
        $atk = atk_Model::getAll();
        require_once('views/patient/update.php');
        
    }


    public function Update()
    {
        $key = $_GET['bid'];
        
        
        $id = $_GET['id'];
        $Field_hospital = $_GET['Field_hospital'];
        $atk = $_GET['atk'];
        $date = $_GET['date'];
        
        patient_Model::update($key,$id, $Field_hospital, $atk, $date);
        PateintController::index();

       
    }


    public function DeleteC()
    {
        
        $key = $_GET['key'];
        $ptList = patient_Model::get($key);
        require_once('views/patient/delete.php');
        
    }

    public function Delete()
    {

        $key = $_GET['id'];
        patient_Model::delete($key);
        PateintController::index();

    }


    




}
?>