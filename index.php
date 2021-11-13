<?php
require_once 'Vehicle.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'car.php';
require_once 'bike.php';
require_once 'skate.php';
require_once 'LightableInterface.php';

$car = new car('red',4);
$bike = new bike('blue',1);
$skate = new skate('black',0);

$MotorWay = new MotorWay(4,130);
$MotorWay->addVehicle($car);
$MotorWay->addVehicle($bike);
$MotorWay->addVehicle($skate);
var_dump($MotorWay);

$PedestrianWay = new PedestrianWay(1, 10);
$PedestrianWay->addVehicle($car);
$PedestrianWay->addVehicle($bike);
$PedestrianWay->addVehicle($skate);
var_dump($PedestrianWay);

$ResidentialWay = new ResidentialWay(2, 50);
$ResidentialWay->addVehicle($car);
$ResidentialWay->addVehicle($bike);
$ResidentialWay->addVehicle($skate);
var_dump($ResidentialWay);

    try{
        $car->start();
    }catch (Exception $e) {
        $car->setParkBrake(false);
    }finally {
        echo "My car drive like a Donut!";
}