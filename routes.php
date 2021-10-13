<?php 
$controllers = array('pages'=>['home','error'],
                     'Object'=>['index', 'newObject', 'addObject', 'search', 'updateForm', 'update', 'DeleteConfirm', 'delete']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case"pages": $controller = new PagesController();
                     break;
        case"Object":   require_once("models/OBJ.php");
                        $controller = new ObjectController();
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