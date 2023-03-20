<?php

    define("TITLE","Menu");
    define("CSS","style");
    define("SCRIPT","panier");


    require_once(__DIR__."/controllers/menuController.php");
    $menuController = new MenuController;
    $menus = $menuController->readAllMenu();




    include(__DIR__."/assets/include/head.php");
    include(__DIR__."/assets/include/headerNav.php");

    include(__DIR__."/views/listeMenu.php");

    include(__DIR__."/assets/include/footer.php");

?>