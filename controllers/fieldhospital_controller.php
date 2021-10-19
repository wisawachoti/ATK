<?php
class fhController{


    public function index(){
        $fhlList = fh_Model::getAll();
        require_once('views/fieldhospital/index.php');
        
    }

    public function BACK(){
        $fhlList = fh_Model::getAll();
        require_once('views/fieldhospital/index.php');
        
    }

    public function search()
    {
        $key = $_GET['key'];
        $fhlList = fh_Model::search($key);
        require_once('views/fieldhospital/index.php');
    }

    public function an(){
        $id = aiModel::getid("Field_hospital","field_hospital_id");
        $agList = ag_Model::getAll();
        require_once('views/fieldhospital/add.php');
    }
}
?>