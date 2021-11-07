<?php
class PateintController{

    
    public function index(){
        $ptList = patient_Model::getAll();
        $sumList = fh_Model::getsum();
        require_once('views/patient/index.php');
        
    }

}
?>