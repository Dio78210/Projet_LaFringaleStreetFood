<?php
    session_start();

    define("TITLE","Page Admin");

    require_once(__DIR__."/../controllers/adminController.php");

    $adminController = new AdminController;

    $adminController->verifyLogin();


    include(__DIR__."/../assets/include/headerNav.php");

    include(__DIR__."/../views/indexAdmin.php");

    include(__DIR__."/../assets/include/footer.php");