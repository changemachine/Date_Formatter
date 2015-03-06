<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/contact.php";

  session_start();
  if (empty($_SESSION['list_of_contacts'])) {
    $_SESSION['list_of_contacts'] = [];
  }

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('home.twig', array('contacts' =>  Contact::getAll()));
  });

  $app->post("/create_contact", function() use ($app) {
    $new_contact = new Contact($_POST['name'], $_POST['phone'], $_POST['address']);
    $new_contact->save();
    return $app['twig']->render('created.twig', array('contact' => $_POST));
  });

  $app->get("/delete_contacts", function() use ($app) {
    Contact::deleteAll();
    return $app['twig']->render('deleted.twig');
  });

  return $app;
?>
