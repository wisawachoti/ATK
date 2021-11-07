<?php
class wsController{
    public function index()
    {
        $wsList=wsModel::getAll();
        require_once('views/workschedule/index_workschedule.php');
    }

    public function newWorkSchedule()
    {
        $wsid = aiModel::getid("WorkSchedule","ws_id");
        $wsList=wsModel::getAll();
        $staffcheckpointList = StaffCheckpoint::getall();
        $staffpositioncheckpointList = StaffPositionCheckpoint::getAll();
        $stationList = Station::getStation();
        require_once('views/workschedule/newWorkSchedule.php');
    }

    public function addWorkSchedule()
    {
        $wsid = $_GET['ws_id'];
        $date = $_GET['date'];
        $staffname = $_GET['cname'];
        $staffpname = $_GET['name'];
        $stationname = $_GET['s_name'];
        wsModel::Add($wsid,$date,$staffname,$staffpname,$stationname);
        wsController::index();

    }

    public function searchWorkSchedule()
    {
        $key=$_GET['key'];
        $wsList=wsModel::search($key);
        require_once('views/workschedule/index_workschedule.php');
    }
}
?>
