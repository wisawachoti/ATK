<?php
class wsController{
     public function index()
    {
        $wsList=wsModel::getAll();
        require_once('views/workschedule/index_workschedule.php');
    }
}
?>
