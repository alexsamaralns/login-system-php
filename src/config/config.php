<?php

    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft-8', 'portuguese');

    // Folders
    define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
    define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
    define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/template'));
    define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
    define('CORE_PATH', realpath(dirname(__FILE__) . '/../core'));

    // Files
    require_once('../public/vendor/autoload.php');
    require_once(realpath(dirname(__FILE__) . '/database.php'));
    require_once(realpath(CORE_PATH . '/Core.php'));
    require_once(realpath(CONTROLLER_PATH . '/LoginController.php'));
    require_once(realpath(CONTROLLER_PATH . '/DashboardController.php'));
    require_once(realpath(MODEL_PATH . '/User.php'));
    //require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
    //require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));

?>