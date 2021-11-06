<?php
class StaffCheckpointController{
     public function index()
    {
        $staffcheckpointList=StaffCheckpoint::getAll();
        require_once('views/staffcheckpoint/index_StaffCheckpoint.php');
    }

    public function newStaffCheckpoint()
    {
        $staffcheckpointList = StaffCheckpoint::getAll();
        require_once('views/staffcheckpoint/newStaffCheckpoint.php');
    }

    public function addStaffCheckpoint()
    {
        $staffid = $_GET['staff_c_id'];
        $staffname = $_GET['cname'];

        StaffCheckpoint::Add($staffid,$staffname);
        StaffCheckpointController::index();

    }
    public function searchStaffCheckpoint()
    {
        $key=$_GET['key'];
        $staffcheckpointList=StaffCheckpoint::search($key);
        require_once('views/staffcheckpoint/index_StaffCheckpoint.php');
    }
}
?>
