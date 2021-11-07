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

    public function updateFormStaffCheckpoint()
    {
        $staffid=$_GET['staff_c_id'];
        $staffname=$_GET['cname'];
        $staffcheckpointList=StaffCheckpoint::getAll();
        $staffcheckpoint=StaffCheckpoint::get($staffid,$staffname);
        require_once('views/staffcheckpoint/updateFormStaffCheckpoint.php');
    }

    public function updateStaffCheckpoint()
    {
        $staffid=$_GET['staff_c_id'];
        $staffname=$_GET['cname'];
        $laststaffid=$_GET['laststaff_c_id'];
        $laststaffname=$_GET['lastcname'];
        StaffCheckpoint::update($staffid,$staffname,$laststaffid,$laststaffname);
        StaffCheckpointController::index();
    }

}
?>
