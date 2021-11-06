<?php
    $controllers =array('pages'=>['home','error'],
                        'staffcheckpoint'=>['index','newStaffCheckpoint','addStaffCheckpoint']);

    function call($controller,$action)
    {
        require_once("controllers/".$controller."_controller.php");
        switch($controller)
        {
            case "pages" : $controller= new PagesController();
                        break;
            case "staffcheckpoint" : require_once("models/staffcheckpointModel/staffcheckpointModel.php");
                                    $controller = new StaffCheckpointController();
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
        else
        {
            call('pages','error');
        }
    }
    else
    {
        call('pages','error');
    }
?>
