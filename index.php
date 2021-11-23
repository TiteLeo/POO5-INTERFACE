<?php
require_once 'Vehicle.php';
require_once 'car.php';
require_once 'bike.php';
require_once 'skate.php';
require_once 'LightableInterface.php';

$car = new car('red',4);
$bike = new bike('blue',1);
$skate = new skate('black',0);

    try{
        $car->start();
    }catch (Exception $e) {
        $car->setParkBrake(false);
    }finally {
        echo "My car drive like a Donut!";
}
