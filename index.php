<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    //echo "My Pets";

    $view = new Template();
    echo $view->render('view/pet-home.html');
});

$f3->route('GET /order', function () {
    //echo "Pet Order Page";


   $view = new Template();
   echo $view->render('view/pet-order1.html');
});

$f3->route('POST /pet-order2', function () {
    //echo "Pet Order Page";


    $view = new Template();
    echo $view->render('view/pet-order2.html');
});

$f3->run();