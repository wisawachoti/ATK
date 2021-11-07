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
        $staff_c_id = $_GET['staff_c_id'];
        $cname = $_GET['cname'];

        StaffCheckpoint::Add($staff_c_id,$cname);
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
        $staff_c_id=$_GET['staff_c_id'];
        $staffcheckpoint=StaffCheckpoint::get($staff_c_id);
        require_once('views/staffcheckpoint/updateFormStaffCheckpoint.php');
    }

    public function updateStaffCheckpoint()
    {
        $staff_c_id=$_GET['staff_c_id'];
        $cname=$_GET['cname'];
        StaffCheckpoint::update($staff_c_id,$cname);
        StaffCheckpointController::index();
    }

    public function deleteConfirmStaffCheckpoint()
    {
        $staff_c_id=$_GET['staff_c_id'];
        $staffcheckpoint=StaffCheckpoint::get($staff_c_id);
        require_once('views/staffcheckpoint/deleteConfirmStaffCheckpoint.php');
    }
    public function deleteStaffCheckpoint()
    {
        $staff_c_id=$_GET['staff_c_id'];
        StaffCheckpoint::delete($staff_c_id);
        StaffCheckpointController::index();
    }

}
?>
