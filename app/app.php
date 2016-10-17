<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Meal.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      return "This is the index page!";
    });

    $app->get("/hello", function() {
      $newMeal = new Meal("My Table");
      return "Hello friend! You're dining at the " . $newMeal->getTableName() . " table.";
    });

    return $app;
?>
