<?php

    session_start();

    define("TITLE","Galerie");
    define("CSS","navCssAdmin");

    require_once(__DIR__."/../controllers/adminController.php");
    $adminController = new AdminController;
    $adminController->verifyLogin();


    require_once(__DIR__."/../controllers/privatisationController.php");
    $privatisationController = new PrivatisationController;
    $messages = $privatisationController->createGalerie();
    $galeries = $privatisationController->readAllPrivatisation();


    include(__DIR__."/../assets/include/head.php");
    include(__DIR__."/../assets/include/navAdmin.php");

    include(__DIR__."/../views/viewsAdmin/galeriePrivatisation.php");

    include(__DIR__."/../assets/include/footerAdmin.php");