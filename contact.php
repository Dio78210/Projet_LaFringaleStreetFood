<?php


    define("TITLE","Contact");
    define("CSS","style");
    define("SCRIPT","form");

    require_once(__DIR__ . "/controllers/formContactController.php");


    $formContactController = new formContactController;
    $messages = $formContactController->createContact();


    include(__DIR__."/assets/include/head.php");
    include(__DIR__."/assets/include/headerNav.php");

    include(__DIR__."/views/formulaireContact.php");

    include(__DIR__."/assets/include/footer.php");

?>