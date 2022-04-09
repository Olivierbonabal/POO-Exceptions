<?php
//Appel
require_once 'Bicycle.php';
require_once "Cars.php";
require_once "Truck.php";
require_once "Skateboard.php";
require_once "MotorWay.php";
require_once "ResidentialWay.php";
require_once "PedestrianWay.php";

//Vehicles
$car = new Cars("blue", 5, "Diesel");
$truck = new Truck("purple", 3, "fuel", 30);
$bike = new Bicycle('blue', 1);
$skate = new Skateboard("yellow", 4);
$bicycle = new Bicycle('blue', 1);
$cars = new Cars('green', 4, 'electric');
$cargo = new Truck('white', 3, 'fuel', 34000);

//Routes
$motor = new MotorWay;
$residential = new ResidentialWay;
$pedestrian = new PedestrianWay;

//++++ véhicles
$residential->addVehicle($car);
$residential->addVehicle($bike);
$residential->addVehicle($skate);
$motor->addVehicle($bike);
$motor->addVehicle($car);
$pedestrian->addVehicle($car);
$pedestrian->addVehicle($bike);

//array
var_dump($residential->getCurrentVehicles());
var_dump($motor->getCurrentVehicles());
var_dump($pedestrian->getCurrentVehicles());

echo $bicycle->forward();
echo '<br> Vitesse vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse vélo : ' . $bicycle->getcurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake() . '<br>';

echo $cars->forward();
echo '<br> Vitesse voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake() . '<br>';

echo  $cargo->forward();
echo '<br> Vitesse camion : ' . $cargo->getCurrentSpeed() . ' km/h' . '<br>';
echo $cargo->brake();
echo '<br> Vitesse camion : ' . $cargo->getCurrentSpeed() . ' km/h' . '<br>';
echo $cargo->brake();
echo '<br> Chargement camion: ' . $cargo->getLoading() . ' litres' . '<br>';
echo $cargo->loading() . '<br>';

echo "<br> La vitesse maximale sur l'autoroute est de " . ' ' . $motorway->getMaxSpeed() .  ' ' . 'km/h';
echo "<br> Le nombre de voies sur l'autoroute est de " . ' ' . $motorway->getNbLane() .  ' .' . '<br>';
echo '<br><br>';

echo '<br> La vitesse maximale sur la voie piétone est de ' . ' ' . $pedestrian->getMaxSpeed() .  ' ' . 'km/h';
echo '<br> Le nombre de voie est de ' . ' ' . $pedestrian->getNbLane() .  ' .' . '<br>';
echo '<br><br>';

echo '<br> La vitesse maximale sur route est de ' . ' ' . $residential->getMaxSpeed() .  ' ' . 'km/h';
echo '<br> Le nombre de voies est de ' . ' ' . $residential->getNbLane() .  ' .' . '<br>';

echo '<br>' . 'Si le frein à main est mis.';
$car->setParkBrake(true);
try {
    echo $car->start();
} catch (Exception $e) {
    echo '<br>' .  'Attention, ' . $e->getMessage();
    $car->setParkBrake(false);
    echo '<br>' . "You don't move !!!";
} finally {
    $car->start();
    echo '<br>' . 'Ma voiture roule comme un donut';
}
