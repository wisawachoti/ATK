<?php
$controllers = array(
'home'=>['home','error'],
'page1'=>['index'],
'page2'=>['index'],
'page3'=>['index']);

function call($controller,$action){
    require_once("controllers/".$controller."_controller.php");
    switch($controller){
        case "home": require_once("models/fh_model.php");
            $controller = new HomeController();break;
        
    }
    $controller->{$action}();
}

if(array_key_exists($controller,$controllers)){
    if(in_array($action,$controllers[$controller])){
        call($controller,$action);
    }else{
        call('home','error');
    }
}else{
    call('home','error');
}
?>