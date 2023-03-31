<?php

    define("TITLE","Accueil");
    define("CSS","style");
    // define("SCRIPT","map");


    require_once(__DIR__ . "/controllers/localisationController.php");
    


    // $localisationController = new LocalisationController;
    // $messages = $localisationController->readAll();

    require_once(__DIR__ . "/controllers/aProposController.php");

    $aProposController = new aProposController;
    $aPropos = $aProposController->readOnePropos();



    require_once(__DIR__."/controllers/localisationController.php");
    $localisationController = new LocalisationController;
    $localisations = $localisationController->readAllLocalisation();







    include(__DIR__."/assets/include/head.php");
    include(__DIR__."/assets/include/headerNav.php");

    include(__DIR__."/views/accueil.php");

    include(__DIR__."/assets/include/footer.php");


