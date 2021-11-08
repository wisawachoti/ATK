<?php
class SymptomController{

    
    public function index(){
        $spList = symptoms_Model::getAll();
        $sumList = fh_Model::getsum();
        require_once('views/symptom/index.php');
        
    }

    public function an(){
        $id = aiModel::getid("symptoms_fh","symptoms_fh_id");
        $adList = patient_Model::getAll();
        require_once('views/symptom/add.php');
    }

    public function NEW(){
        $id = $_GET['id'];
        $admit_fh_id = $_GET['admit_fh_id'];
        $temperature = $_GET['temperature'];
        $date = $_GET['date'];
       
        symptoms_Model::Add($id, $admit_fh_id, $temperature, $date);
        SymptomController::index();
    }

    public function BACK(){
        $spList = symptoms_Model::getAll();
        $sumList = fh_Model::getsum();
        require_once('views/symptom/index.php');
        
    }

    public function search()
    {
        $key = $_GET['key'];
        $spList = symptoms_Model::search($key);
        require_once('views/symptom/index.php');
    }

    public function upd()
    {
        
        $key = $_GET['key'];
        $adList = patient_Model::getAll();
        $spList = symptoms_Model::get($key);
        require_once('views/symptom/update.php');
        
    }


    public function Update()
    {
        $key = $_GET['id'];
        
        $symptoms_fh_id = $_GET['symptoms_fh_id'];
        $admit_fh_id = $_GET['admit_fh_id'];
        $temperature = $_GET['temperature'];
        $date = $_GET['date'];
        
        symptoms_Model::update($key,$symptoms_fh_id,$admit_fh_id,$temperature,$date);
        SymptomController::index();

       
    }


    public function DeleteC()
    {
        
        $key = $_GET['key'];
        $spList = symptoms_Model::get($key);
        require_once('views/symptom/delete.php');
        
    }

    public function Delete()
    {

        $key = $_GET['key'];
        symptoms_Model::delete($key);
        SymptomController::index();

    }





}
?>