<?php
class ObjectController{
    public function index(){
        $objectlist = OBJ::getAll();
        require_once('views/OBJ/indexObject.php');
    }
    public function newObject(){
        $objectlist = OBJ::getAll();
        require_once('views/OBJ/newObject.php');
    }
    public function addObject(){
        $OBJid = $_GET['OBJid'];
        $OBJname = $_GET['OBJname'];
        $OBJtype = $_GET['OBJtype'];
        $OBJdesc = $_GET['OBJdesc'];
        OBJ::addO($OBJid, $OBJname, $OBJtype, $OBJdesc);
        ObjectController::index();
    }
    public function search(){
        $key = $_GET['key'];
        $objectlist = OBJ::search($key);
        require_once('views/OBJ/indexObject.php');
    }
    public function updateForm(){
        $OBJid = $_GET['OBJid'];
        $Object = OBJ::get($OBJid);
        require_once('views/OBJ/updateForm.php');
    }
    public function update(){
        $OBJid = $_GET['OBJid'];
        $OBJname = $_GET['OBJname'];
        $OBJtype = $_GET['OBJtype'];
        $OBJdesc = $_GET['OBJdesc'];
        OBJ::update($OBJid, $OBJname, $OBJtype, $OBJdesc);
        ObjectController::index();
    }
    public function DeleteConfirm(){
        $OBJid = $_GET['OBJid'];
        $Object = OBJ::get($OBJid);
        require_once('views/OBJ/DeleteConfirm.php');
    }
    public function delete(){
        $OBJid = $_GET['OBJid'];
        OBJ::delete($OBJid);
        ObjectController::index();
    }
}
?>