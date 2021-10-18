<?php
class fhController{


    public function index(){
        $fhlList = fh_Model::getAll();
        require_once('views/fieldhospital/index.php');
        
    }

    public function an(){
        $id = aiModel::getid("Field_hospital","field_hospital_id");
        require_once('views/fieldhospital/add.php');
    }
}
?>