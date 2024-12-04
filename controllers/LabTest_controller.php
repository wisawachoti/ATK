<?php class LabTest_Controller{
    
    public function index()
    {
        $LabTest_List=LabTest::getAll();
        require_once("./views/LabTest/index_LabTest.php");
    }

    public function newLabTest()
    {
        $LabTest_List = LabTest::getAll();
        require_once('./views/LabTest/newLabTest.php');
    }

    public function addLabTest()
    {
        $lab_id = $_GET['lab_id'];
        $lab_name = $_GET['lab_name'];
        LabTest::Add($lab_id,$lab_name);
        LabTest_Controller::index();
    }

    public function search()
    {
        $key=$_GET['key'];
        $LabTest_List=LabTest::search($key);
        require_once('./views/LabTest/index_LabTest.php');

    }

    public function updateForm()
    {
        $lab_id=$_GET['lab_id'];
        $LabTest=LabTest::get($lab_id);
        require_once('./views/LabTest/updateForm.php');
       
    }

    public function update()
    {
        $lab_id = $_GET['lab_id'];
        $lab_name = $_GET['lab_name'];
        LabTest::update($lab_id,$lab_name);
        LabTest_Controller::index();
    }

    public function deleteConfirm()
    {
        $lab_id=$_GET['lab_id'];
        $LabTest=LabTest::get($lab_id);
        require_once('./views/LabTest/deleteConfirm.php');
    }

    public function delete()
    {
        $lab_id = $_GET['lab_id'];
        LabTest::delete($lab_id);
        LabTest_Controller::index();
    }









}
?>