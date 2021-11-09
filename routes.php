<?php
$controllers = array(
    'home' => ['home', 'error', 'search'],
    'fieldhospital' => ['index', 'an', 'search', 'BACK', 'NEW', 'upd', 'Update', 'Delete', 'DeleteC'],
    'patient' => ['index', 'an', 'search', 'BACK', 'NEW', 'upd', 'Update', 'Delete', 'DeleteC'],
    'symptom' => ['index', 'an', 'search', 'BACK', 'NEW', 'upd', 'Update', 'Delete', 'DeleteC']
);

function call($controller, $action)
{
    require_once("controllers/" . $controller . "_controller.php");
    switch ($controller) {
        case "home":
            require_once("models/ag_model.php");
            require_once("models/fh_model.php");
            require_once("models/ai_model.php");
            require_once("models/getsum.php");
            $controller = new HomeController();
            break;

        case "fieldhospital":
            require_once("models/ag_model.php");
            require_once("models/fh_model.php");
            require_once("models/ai_model.php");
            $controller = new fhController();
            break;

        case "patient":
            require_once("models/pt_model.php");
            require_once("models/fh_model.php");
            require_once("models/ai_model.php");
            require_once("models/atk_model.php");
            require_once("models/getsum.php");
            $controller = new PateintController();
            break;

        case "symptom":
                require_once("models/pt_model.php");
                require_once("models/fh_model.php");
                require_once("models/ai_model.php");
                require_once("models/atk_model.php");
                require_once("models/sp_model.php");
                $controller = new SymptomController();
                break;
    }
    $controller->{$action}();
}

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('home', 'error');
    }
} else {
    call('home', 'error');
}
