<?php
    session_start();

    define("TITLE","Accueil Admin");
    define("CSS","navCssAdmin");

    require_once(__DIR__."/../controllers/adminController.php");
    $adminController = new AdminController;
    $adminController->verifyLogin();

    require_once(__DIR__."/../controllers/aProposController.php");
    $aProposController = new aProposController;
    $aPropos = $aProposController->readOnePropos();
    $messages = $aProposController->updatePropos();


    
    include(__DIR__."/../assets/include/head.php");
    include(__DIR__."/../assets/include/navAdmin.php");

    include(__DIR__."/../views/viewsAdmin/indexAdmin.php");

    include(__DIR__."/../assets/include/footerAdmin.php");