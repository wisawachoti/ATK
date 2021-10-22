<?php class StaffLab_Controller{
    public function index()
    {
        $StaffLab_List=StaffLab::getAll();
        require_once("./views/StaffLab/index_StaffLab.php");
    }
    public function search(){
        $key=$_GET['key'];
        $StaffLab_List=StaffLab::search($key);
        require_once('./views/StaffLab/index_StaffLab.php');

    }
    public function newStaffLab(){
        $StaffLab_List = StaffLab::getAll();
        require_once('./views/StaffLab/new_StaffLab.php');
    }
    public function addStaffLab(){
        $staff_lab_id = $_GET['staff_lab_id'];
        $staff_lab_name = $_GET['staff_lab_name'];
        StaffLab::Add($staff_lab_id,$staff_lab_name);
        StaffLab_Controller::index();
    }
    public function updateForm()
    {
        $staff_lab_id=$_GET['staff_lab_id'];
        $StaffLab=StaffLab::get($staff_lab_id);
        require_once('./views/StaffLab/updateForm.php');
       
    }
    public function update()
    {
        $staff_lab_id = $_GET['staff_lab_id'];
        $staff_lab_name = $_GET['staff_lab_name'];
        StaffLab::update($staff_lab_id,$staff_lab_name);
        StaffLab_Controller::index();
    }
    public function deleteConfirm()
    {
        $staff_lab_id=$_GET['staff_lab_id'];
        $StaffLab=StaffLab::get($staff_lab_id);
        require_once('./views/StaffLab/deleteConfirm.php');
    }
    public function delete()
    {
        $staff_lab_id = $_GET['staff_lab_id'];
        StaffLab::delete($staff_lab_id);
        StaffLab_Controller::index();
    }
}
?>