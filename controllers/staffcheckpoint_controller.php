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
        $staffid = $_GET['Product_ID'];
        $staffname = $_GET['Quantity'];

        StaffCheckpoint::Add($staffid,$staffname);
        StaffCheckpointController::index();

    }
}
?>
