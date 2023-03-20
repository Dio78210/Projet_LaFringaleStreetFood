<?php
    session_start();

    define("TITLE","Accueil Admin");
    define("CSS","navCssAdmin");

    require_once(__DIR__."/../controllers/adminController.php");
    $adminController = new AdminController;
    $adminController->verifyLogin();
    
    include(__DIR__."/../assets/include/head.php");
    include(__DIR__."/../assets/include/navAdmin.php");

    include(__DIR__."/../views/viewsAdmin/indexAdmin.php");

    include(__DIR__."/../assets/include/footerAdmin.php");