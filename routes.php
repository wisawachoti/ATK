<?php
$controllers = array('pages'=> ['home','error'], 'StaffLab'=>['index','search','newStaffLab','addStaffLab','updateForm','update','deleteConfirm','delete'],
                    'LabTest'=>['index','search','newLabTest','addLabTest','updateForm','update','deleteConfirm','delete'],
                'RTTest'=> ['index','newRTTest','addRTTest','search','updateForm','update']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                        break;
        
        case "StaffLab" : require_once("./models/StaffLab.php");
                            $controller = new StaffLab_Controller();
                            break;
        case "LabTest" : require_once("./models/LabTest.php");
                            $controller = new LabTest_Controller();
                            break;

        case "RTTest" : require_once("./models/RTTest.php");
                        require_once("./models/ATK.php");
                        require_once("./models/WorkSchedule.php");
                        require_once("./models/LabTest.php");
                        require_once("./models/StaffLab.php");
                        $controller = new RTTest_Controller();
                            break;
    }
    $controller->{$action}();

}
if(array_key_exists($controller,$controllers)){

    if(in_array($action,$controllers[$controller]))

        call($controller,$action);

    else

    call('pages','error');

}

else{

    call('pages','error');

}