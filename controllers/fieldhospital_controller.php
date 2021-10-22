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

    public function NEW(){
        $field_hospital_id = $_GET['id'];
        $fh_name = $_GET['fh_name'];
        $green = $_GET['green'];
        $yellow = $_GET['yellow'];
        $red = $_GET['red'];
        $agency_id = $_GET['agency'];
        fh_Model::Add($field_hospital_id, $fh_name, $green, $yellow, $red,$agency_id);
        fhController::index();
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


    public function upd()
    {


        $key = $_GET['field_hospital_id'];
        $fhlList = fh_Model::get($key);
        $agList = ag_Model::getAll();
        require_once('views/fieldhospital/update.php');
        
    }

    public function Update()
    {
        
        $key = $_GET['key'];
        $field_hospital_id = $_GET['id'];
        $fh_name = $_GET['fh_name'];
        $green = $_GET['green'];
        $yellow = $_GET['yellow'];
        $red = $_GET['red'];
        $agency_id = $_GET['agency'];
        
       fh_Model::update($key,$field_hospital_id, $fh_name, $green, $yellow, $red,$agency_id);
       fhController::index();

       
    }


}
?>