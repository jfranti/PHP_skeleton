<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "This is the index page!";
    });

    $app->get("/hello", function() {
        return "Hello friend!";
    });

    return $app;
?>
