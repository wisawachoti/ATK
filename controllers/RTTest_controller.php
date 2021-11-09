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

    public function addRTTest(){
        $rt_test_id = $_GET['rt_test_id'];
        $rt_test_date = $_GET['rt_test_date'];
        $rt_test_time = $_GET['rt_test_time'];
        $rt_test_id = $_GET['rt_test_id'];
        $atk_id = $_GET['atk_id'];
        $ws_id = $_GET['ws_id'];
        $lab_id = $_GET['lab_id'];
        $stafflab_id = $_GET['stafflab_id'];
        RTTest::Add($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id);
        RTTest_Controller::index();
    }

    public function search()
    {
        $key=$_GET['key'];
        $RTTest_List=RTTest::search($key);
        require_once('./views/LabTest/index_LabTest.php');

    }
    



}
?>









