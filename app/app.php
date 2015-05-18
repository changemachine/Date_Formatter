<?php
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/PrettyDate.php";

  $app = new Silex\Application();
  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => '../views'));



//Home
  $app->get("/", function() use ($app) {
    date_default_timezone_set('America/Los_Angeles'); //or ini_alter('date.timezone','America/Los_Angeles');
    $today = date('l, F jS, Y');
    return $app['twig']->render('home.twig', array('today' => $today));
  });

//Results
  $app->post("/result", function() use ($app) {
    date_default_timezone_set('America/Los_Angeles');
    $today = date('l, F jS, Y');
    $input = $_POST['date'];//Date picker's natural output is 'yyyy-mm-dd'
    $style = $_POST['style'];
    $dateArray = explode('-', $input);
    $newDateClass = new myDateClass($dateArray[1], $dateArray[2], $dateArray[0]);
    $prettyOutput = $newDateClass->prettyDate($style);

    $dates = ['2001-1-1', '2002-2-2', '2003-3-3', '2004-4-4', '2015-12-5'];
    $datesOut = [];

    foreach($dates as $date){
        $datex = explode('-', $date);
        $newDateClass = new myDateClass($datex[1], $datex[2], $datex[0]);
      //   $prettyOutput = $newDateClass->prettyDate($style);
        array_push($datesOut, $newDateClass);
    // var_dump($datesOut);
        // return $datesOut;
    };


    return $app['twig']->render('home.twig',  array('datesOut'=>$datesOut, 'input' => $input, 'prettyOutput' => $prettyOutput, 'today' => $today));
  });

    // $app->post("/predefined", function() use ($app) {
    //
    //   $dates = ['2001-1-1', '2002-2-2', '2003-3-3', '2004-4-4', '2015-12-5'];
    //   $datesOut = [];
    //
    //   foreach($dates as $date){
    //       $datex = explode('-', $date);
    //       $newDateClass = new myDateClass($datex[1], $datex[2], $datex[0]);
    //     //   $prettyOutput = $newDateClass->prettyDate($style);
    //       array_push($datesOut, $newDateClass);
    //   var_dump($datesOut);
    //       return $datesOut;
    //   };
    //
    //   return $app['twig']->render('home.twig',  array('dates' => $dates, 'datesOut' => $datesOut));
    // });


  return $app;
?>
