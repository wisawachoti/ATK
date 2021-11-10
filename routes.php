<?php 
$controllers = array('pages'=>['home','error'],
                     'Object'=>['index', 'newObject', 'addObject', 'search', 'updateForm', 'update', 'DeleteConfirm', 'delete'],
                     'DailyLog'=>['index', 'newDailyLog', 'addDailyLog', 'search', 'updateForm', 'update', 'DeleteConfirm', 'delete'],
                     'NesObject'=>['index', 'newNesObject', 'addNesObject', 'search', 'updateForm', 'update', 'DeleteConfirm', 'delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": require_once("models/OBJ.php");
                     require_once("models/DailyLog.php");
                     require_once("models/NesObject.php");
                     $controller = new PagesController();
                     break;
        case"Object":   require_once("models/OBJ.php");
                        require_once("models/AutoID.php");
                        $controller = new ObjectController();
                        break;
        case"DailyLog": require_once("models/DailyLog.php");
                        require_once("models/HomeISO.php");
                        require_once("models/AutoID.php");
                        $controller = new DailyLogController();
                        break;
        case"NesObject": require_once("models/NesObject.php");
                         require_once("models/OBJ.php");
                         require_once("models/HomeISO.php");
                         require_once("models/AutoID.php");
                         $controller = new NesObjectController();
                         break;
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action);
    }
    else{
        call('pages','error');
    }
}
else{
    call('pages','error');
}
?>