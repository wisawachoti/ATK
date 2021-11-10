<?php
class PagesController
{
    public function home()
    {
        $dailyloglist = DailyLog::getAll();
        $CheckAllO = OBJ::CheckAll();
        $CheckAllD = DailyLog::CheckAll();
        $CheckAllN = NesObject::CheckAll();
        $CheckQuantity = NesObject::CheckQuantity();
        require_once('views/pages/home.php');
    }
    public function error()
    {
        require_once('views/pages/error.php');
    }
    
}
?>