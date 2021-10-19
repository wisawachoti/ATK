<?php
class HomeController{

    
    public function home(){
        $fhlList = fh_Model::getAll();
        require_once('views/home/home.php');
        
    }


    public function search()
    {
        $key = $_GET['key'];
        $fhlList = fh_Model::search($key);
        require_once('views/home/home.php');
    }



    public function error(){
        require_once('views/home/error.php');
    }
}
?>