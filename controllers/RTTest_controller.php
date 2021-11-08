<?php class RTTest_Controller{

    public function index()
    {
        $RTTest_List=RTTest::getAll();
        require_once("./views/RTTest/index_RTTest.php");
    }

    public function newRTTest(){
        $RTTest_List = RTTest::getAll();
        require_once('./views/RTTest/newRTTest.php');
    }

    public function addRTTest(){
        $staff_lab_id = $_GET['staff_lab_id'];
        $staff_lab_name = $_GET['staff_lab_name'];
        StaffLab::Add($staff_lab_id,$staff_lab_name);
        StaffLab_Controller::index();
    }




}









