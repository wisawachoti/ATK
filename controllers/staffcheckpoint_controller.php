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
        $staffcheckpoint=StaffCheckpoint::get($staffid,$staffname);
        $staffcheckpointList=StaffCheckpoint::getAll();
        require_once('views/staffcheckpoint/updateFormStaffCheckpoint.php');
    }

    public function updateStaffCheckpoint()
    {
        $staffid=$_GET['staff_c_id'];
        $staffname=$_GET['cname'];
        StaffCheckpoint::update($staffid,$staffname);
        StaffCheckpointController::index();
    }

    public function deleteConfirmStaffCheckpoint()
    {
        $staffid=$_GET['staff_c_id'];
        $staffname=$_GET['cname'];
        $staffcheckpoint=StaffCheckpoint::get($staffid,$staffname);
        require_once('views/staffcheckpoint/deleteConfirmStaffCheckpoint.php');
    }
    public function deleteStaffCheckpoint()
    {
        $staffid=$_GET['staff_c_id'];
        $staffname=$_GET['cname'];
        StaffCheckpoint::delete($staffid,$staffname);
        StaffCheckpointController::index();
    }


}
?>
