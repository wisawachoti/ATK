<?php
class StaffCheckpointController{
     public function index()
    {
        $staffcheckpointList=StaffCheckpoint::getAll();
        require_once('views/staffcheckpoint/index_StaffCheckpoint.php');
    }

    public function newRate()
    {
        $productList = StaffCheckpoint::getAll();
        require_once('views/staffcheckpoint/newStaffCheckpoint.php');
    }

    public function addStaffCheckpoint()
    {
        $staffid = $_GET['staff_c_id'];
        $staffname = $_GET['name'];

        StaffCheckpoint::Add($staffid,$staffname);
        StaffCheckpointController::index();

    }
}
?>
