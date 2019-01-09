<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/7/2019
 * Time: 11:20 AM
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require autoload
require_once('vendor/autoload.php');

//Create an instance of the Base Class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    //echo '<h1>Howdy!</h1>';

    $view = new View;
    echo $view->render('views/home.html');
});

//Run fat free
$f3->run();