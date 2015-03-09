<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/TitleCaseGenerator.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig');
  });

  $app->post("/generate", function() use ($app) {
    $title = $_POST['title'];
    $generated = TitleCaseGenerator::makeTitleCase($title);
    return $app['twig']->render('generate.twig', array('title' => $title, 'generated' => $generated));
  });

  return $app;
?>
