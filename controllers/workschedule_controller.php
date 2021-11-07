<?php
class wsController{
    public function index()
    {
        $wsList=wsModel::getAll();
        require_once('views/workschedule/index_workschedule.php');
    }

    public function newWorkSchedule()
    {
        $wsList = wsModel::getAll();
        $staffcheckpointList = StaffCheckpoint::getAll();
        $staffpositioncheckpointList = StaffPositionCheckpoint::getAll();
        $stationList = Station::getAll();
        require_once('views/workschedule/newWorkSchedule.php');
    }

    public function addWorkSchedule()
    {
        $wsid = $_GET['ws_id'];
        $date = $_GET['date'];
        $staffid = $_GET['staff_c_id'];
        $staffpid = $_GET['staff_pc_id'];
        $stationid = $_GET['station_id'];
        wsModel::Add($wsid,$date,$staffid,$staffpid,$stationid);
        wsController::index();

    }
}
?>
