<?php class RTTest_Controller{

    public function index()
    {
        $RTTest_List=RTTest::getAll();
        require_once("./views/RTTest/index_RTTest.php");
    }

    public function newRTTest(){
        $ATK_List = ATK::getAll();
        $WorkSchedule_List= WorkSchedule::getAll();
        $LabTest_List = LabTest::getAll();
        $StaffLab_List = StaffLab::getAll();
        require_once('./views/RTTest/newRTTest.php');
        
    }

    



}
?>









