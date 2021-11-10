<?php

    $controllers = array('pages'=>['home','error'],
                        'medicine'=>['index','newMedicine','addMedicine','search','updateForm','updateMedicine','deleteConfirm','deleteMedicine'],
                        'medicalRecord'=>['index','newMedicalRecord','addMedicalRecord','search','updateForm','updateMedicalRecord','deleteConfirm','deleteMedicalRecord']);

    function call($controller,$action)
    {
        echo "routes to ".$controller."-".$action."<br>";

        require_once("controllers/".$controller."_controller.php");
        switch($controller)
        {
            case "pages": require_once("models/FinalModel.php");
                $controller = new pagescontroller();
            break;
            
            case "medicine":    require_once("models/medicineModel/medicineModel.php");
                                require_once("aiModel.php");
                                $controller = new medicinecontroller();
            break;
            case "medicalRecord":   require_once("models/medicalRecordModel/medicalRecordModel.php");
                                    require_once("models/medicineModel/medicineModel.php");
                                    require_once("models/medicalRecordModel/volunteerDocModel.php");
                                    require_once("models/medicalRecordModel/symptomsModel.php");
                                    require_once("aiModel.php");
                                    $controller = new medicalRecordController();
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