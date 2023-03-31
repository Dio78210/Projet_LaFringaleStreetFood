<?php
    session_start();

    define("TITLE","Localisation");
    define("CSS","navCssAdmin");

    require_once(__DIR__."/../controllers/adminController.php");
    $adminController = new AdminController;
    $adminController->verifyLogin();

    require_once(__DIR__."/../controllers/localisationController.php");
    $localisationController = new LocalisationController;
    $messages = $localisationController->updateLocalisation();
    $localisation = $localisationController->readOneLocalisation();


    
    include(__DIR__."/../assets/include/head.php");
    include(__DIR__."/../assets/include/navAdmin.php");

    include(__DIR__."/../views/viewsAdmin/modifierLocalisation.php");

    include(__DIR__."/../assets/include/footerAdmin.php");