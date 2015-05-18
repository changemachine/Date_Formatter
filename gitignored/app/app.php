<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/PrettyDate.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));



//Home
  $app->get("/", function() use ($app) {
    date_default_timezone_set('America/New_York'); //alt: ini_alter('date.timezone','America/New_York');
    $today = date('l, F jS, Y');//Gets today's date, in spec'd format
    return $app['twig']->render('home.twig', array('today' => $today));
  });



//Results
  $app->post("/result", function() use ($app) {
    date_default_timezone_set('America/New_York');
    $today = date('l, F jS, Y');
    //Date picker's natural output is 'yyyy-mm-dd'
    $input = $_POST['date'];
    $style = $_POST['style'];
    $dateArray = explode('-', $input);
    $newDateClass = new myDateClass($dateArray[1], $dateArray[2], $dateArray[0]);
    $prettyOutput = $newDateClass->prettyDate($style);

    return $app['twig']->render('home.twig',  array('input' => $input, 'prettyOutput' => $prettyOutput, 'today' => $today));
  });



  return $app;
?>
