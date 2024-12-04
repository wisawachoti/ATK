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
        $atk_id = $_GET['noatk'];
        $ws_id = $_GET['worksd'];
        $lab_id = $_GET['nolab'];
        $stafflab_id = $_GET['nostf'];
        RTTest::Add($rt_test_id,$rt_test_date,$rt_test_time,$atk_id,$ws_id,$lab_id,$stafflab_id);
        RTTest_Controller::index();
    }

    public function search()
    {
        $key=$_GET['key'];
        $RTTest_List=RTTest::search($key);
        require_once('./views/RTTest/index_RTTest.php');

    }

    public function updateForm()
    {
        $rt_test_id=$_GET['rt_test_id'];
        $rt_test_date=$_GET['rt_test_date'];
        $rt_test_time=$_GET['rt_test_time'];
        $RTTest=RTTest::get($rt_test_id,$rt_test_date,$rt_test_time);
        require_once('./views/RTTest/updateForm.php');
       
    }

    public function update()
    {
        $rt_test_id = $_GET['rt_test_id'];
        $rt_test_ID = $_GET['rt_test_ID'];
        $rt_test_date=$_GET['rt_test_date'];
        $rt_test_time=$_GET['rt_test_time'];
        RTTest::update($rt_test_id,$rt_test_date,$rt_test_time,$rt_test_ID);
        RTTest_Controller::index();
    }
    
    public function deleteConfirm()
    {
        $rt_test_id=$_GET['rt_test_id'];
        $RTTest=RTTest::get($rt_test_id);
        require_once('./views/RTTest/deleteConfirm.php');
    }

    public function delete()
    {
        $rt_test_id = $_GET['rt_test_id'];
        RTTest::delete($rt_test_id);
        RTTest_Controller::index();
    }



}
?>









