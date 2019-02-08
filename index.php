<?php
/**
 * Created by PhpStorm.
 * User: humme_000
 * Date: 2/6/2019
 * Time: 11:46 AM
 */

ini_set('display_errors', 1);
error_reporting(E_ALL);

#require autoload
require_once ('vendor/autoload.php');

#create an instance of the Base class
$f3 = Base::instance();

#Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);


#----------------------------------------------------------------
#define a default route
$f3->route('GET /', function() {

    $monster1 = new Monster("BOO");
    $monster1->attack();

    $vampire = new Vampire();
    echo $vampire->getVictims();
    $vampire->attack();
    echo $vampire->getVictims();
    $vampire->attack();
    echo $vampire->getVictims();

    echo "<br><br>";

    $slime = new Slime();
    echo $slime->getSpew();
    $slime->attack();
    echo $slime->getSpew();
    $slime->attack();
    echo $slime->getSpew();
});

#run fat free
$f3->run();