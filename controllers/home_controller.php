<?php
class HomeController{

    
    public function home(){
        $fhlList = fh_Model::getAlldis();
        $sumList = get_Model::getsum_dis();
        require_once('views/home/home.php');
        
    }


    // public function search()
    // {
    //     $key = $_GET['key'];
    //     $fhlList = fh_Model::getdis($key);
    //     $sumList = get_Model::getsum_dis();
    //     require_once('views/home/home.php');
    // }



    public function error(){
        require_once('views/home/error.php');
    }
}
?>