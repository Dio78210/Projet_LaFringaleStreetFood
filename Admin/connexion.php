<?php

    session_start();

    define("TITLE","Admin");
    define("CSS","ConnexionAdmin");

    require_once(__DIR__."/../controllers/adminController.php");

    $adminController = new AdminController;


    // $adminController->signUp();

    $messages = $adminController->signIn();


    include(__DIR__."/../assets/include/headerNav.php");

    include(__DIR__."/../views/connexionAdmin.php");

    include(__DIR__."/../assets/include/footer.php");

?>