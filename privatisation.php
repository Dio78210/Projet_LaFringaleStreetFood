<?php

    define("TITLE","Privatisation");
    define("CSS","style");

    include(__DIR__."/assets/include/head.php");
    include(__DIR__."/assets/include/headerNav.php");

    require_once(__DIR__."/controllers/privatisationController.php");
    $privatisationController = new PrivatisationController;
    $galeries = $privatisationController->readAllPrivatisation();



    include(__DIR__."/views/privatisationViews.php");
    include(__DIR__."/assets/include/footer.php");

?>