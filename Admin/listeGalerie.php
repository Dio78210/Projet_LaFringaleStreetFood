<?php

    session_start();

    define("TITLE","Liste galerie");
    define("CSS","navCssAdmin");

    require_once(__DIR__."/../controllers/adminController.php");
    $adminController = new AdminController;
    $adminController->verifyLogin();



    require_once(__DIR__."/../controllers/privatisationController.php");
    $privatisationController = new PrivatisationController;
    $galeries = $privatisationController->readAllPrivatisation();




    include(__DIR__."/../assets/include/head.php");
    include(__DIR__."/../assets/include/navAdmin.php");

    include(__DIR__."/../views/viewsAdmin/listeGalerie.php");

    include(__DIR__."/../assets/include/footerAdmin.php");