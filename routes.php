<?php
$controllers = array('pages'=> ['home','error'], 'StaffLab'=>['index','search','newStaffLab','addStaffLab','updateForm','update','deleteConfirm','delete']);

function call($controller,$action){
    require_once("./controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":    $controller = new PagesController();
                        break;
        
        case "StaffLab" : require_once("./models/StaffLab.php");
                            $controller = new StaffLab_Controller();
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