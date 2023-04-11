<?php

    session_start();


    define("TITLE","Admin");
    define("CSS","ConnexionAdmin");

    require_once(__DIR__."/../controllers/adminController.php");

    $adminController = new AdminController;
    $adminController->verifyLogout();

    
    // $adminController->signUp();

    $messages = $adminController->signIn();

    include(__DIR__."/../assets/include/head.php");

    include(__DIR__."/../views/connexionAdmin.php");


?>