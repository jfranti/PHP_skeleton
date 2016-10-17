<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Meal.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
));

    $app->get("/", function() use ($app) {
      return $app['twig']->render('index.html.twig');
    });

    $app->post("/hello", function() {
      $newMeal = new Meal($_POST['name']);
      return "Hello friend! You're dining at the " . $newMeal->getTableName() . " table.";
    });

    return $app;
?>
