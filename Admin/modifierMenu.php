<?php

    session_start();

    define("TITLE","Menu");
    define("CSS","navCssAdmin");

    require_once(__DIR__."/../controllers/adminController.php");
    $adminController = new AdminController;
    $adminController->verifyLogin();


    require_once(__DIR__."/../controllers/menuController.php");
    $menuController = new MenuController;
    $messages = $menuController->updateMenu();
    $menu = $menuController->readOneMenu();


    include(__DIR__."/../assets/include/head.php");
    include(__DIR__."/../assets/include/navAdmin.php");

    include(__DIR__."/../views/viewsAdmin/modifierMenu.php");

    include(__DIR__."/../assets/include/footerAdmin.php");