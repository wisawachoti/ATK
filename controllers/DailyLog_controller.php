<?php
class DailyLogController{
    public function index(){
        $dailyloglist = DailyLog::getAll();
        require_once('views/DailyLog/indexDailyLog.php');
    }
    public function newDailyLog(){
        $dailyloglist = DailyLog::getAll();
        $homeisolationlist = HomeISO::getAll();
        require_once('views/DailyLog/newDailyLog.php');
    }
    public function addDailyLog(){
        $DLOGid = $_GET['DLOGid'];
        $DLOGdate = $_GET['DLOGdate'];
        $DLOGcolour = $_GET['DLOGcolour'];
        $DLOGillness = $_GET['DLOGillness'];
        $HIid = $_GET['HIid'];
        DailyLog::addDailyLog($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid);
        DailyLogController::index();
    }
    public function search(){
        $key = $_GET['key'];
        $dailyloglist = DailyLog::search($key);
        require_once('views/DailyLog/indexDailyLog.php');
    }
    public function updateForm(){
        $DLOGid = $_GET['DLOGid'];
        $Daily = DailyLog::get($DLOGid);
        $homeisolationlist = HomeISO::getAll();
        require_once('views/DailyLog/updateForm.php');
    }
    public function update(){
        $DLOGid = $_GET['DLOGid'];
        $DLOGdate = $_GET['DLOGdate'];
        $DLOGcolour = $_GET['DLOGcolour'];
        $DLOGillness = $_GET['DLOGillness'];
        $HIid = $_GET['HIid'];
        DailyLog::update($DLOGid, $DLOGdate, $DLOGcolour, $DLOGillness, $HIid);
        DailyLogController::index();
    }
    public function DeleteConfirm(){
        $DLOGid = $_GET['DLOGid'];
        $Daily = DailyLog::get($DLOGid);
        require_once('views/DailyLog/DeleteConfirm.php');
    }
    public function delete(){
        $DLOGid = $_GET['DLOGid'];
        DailyLog::delete($DLOGid);
        DailyLogController::index();
    }
}
?>