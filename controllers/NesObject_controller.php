<?php
class NesObjectController{
    public function index(){
        $nesobjectlist = NesObject::getAll();
        require_once('views/NesObject/indexNesObject.php');
    }
    public function newNesObject(){
        $nesobjectlist = NesObject::getAll();
        $objectlist = OBJ::getAll();
        $homeisolationlist = HomeISO::getAll();
        require_once('views/NesObject/newNesObject.php');
    }
    public function addNesObject(){
        $NESid = $_GET['NESid'];
        $OBJid = $_GET['OBJid'];
        $NESquantity = $_GET['NESquantity'];
        $HIid = $_GET['HIid'];
        NesObject::addNesObject($NESid, $OBJid, $NESquantity, $HIid);
        NesObjectController::index();
    }
    public function search(){
        $key = $_GET['key'];
        $nesobjectlist = NesObject::search($key);
        require_once('views/NesObject/indexNesObject.php');
    }
    public function updateForm(){
        $NESid = $_GET['NESid'];
        $nesobject = NesObject::get($NESid);
        $objectlist = OBJ::getAll();
        $homeisolationlist = HomeISO::getAll();
        require_once('views/NesObject/updateForm.php');
    }
    public function update(){
        $NESid = $_GET['NESid'];
        $OBJid = $_GET['OBJid'];
        $NESquantity = $_GET['NESquantity'];
        $HIid = $_GET['HIid'];
        NesObject::update($NESid, $OBJid, $NESquantity, $HIid);
        NesObjectController::index();
    }
    public function DeleteConfirm(){
        $NESid = $_GET['NESid'];
        $nesobject = NesObject::get($NESid);
        require_once('views/NesObject/DeleteConfirm.php');
    }
    public function delete(){
        $NESid = $_GET['NESid'];
        NesObject::delete($NESid);
        NesObjectController::index();
    }
}
?>