<?php
    $controllers =array('pages'=>['home','error'],
                        'staffcheckpoint'=>['index','newStaffCheckpoint','addStaffCheckpoint','searchStaffCheckpoint','updateFormStaffCheckpoint','updateStaffCheckpoint','deleteConfirmStaffCheckpoint','deleteStaffCheckpoint']
                        ,'workschedule'=>['index','newWorkSchedule','addWorkSchedule']);

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
            case "workschedule" : require_once("models/workscheduleModel/workscheduleModel.php");
                                    require_once("models/workscheduleModel/staffcheckpointModel.php");
                                    require_once("models/workscheduleModel/staffpositioncheckpointModel.php");
                                    require_once("models/workscheduleModel/stationModel.php");
                                    $controller = new wsController();
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
