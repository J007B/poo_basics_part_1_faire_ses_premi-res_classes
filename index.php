<?php 

require_once 'src/Bicycle.php';
require_once 'src/SimpsonsCars.php';


// ==========   Bike   =========
$bike = new Bicycle();
$bike->setColor('blue');
 
// Moving bike
echo $bike->forward().'</br>';
echo 'Vitesse du vélo : '. $bike->setCurrentSpeed(16) . 'km/h' . '</br>';
echo $bike->break().'</br>';


// ==========   Pink Car   =========
$pinkCar = new SimpsonsCars('pink', 4, 'gasoline');
echo $pinkCar->start().'</br>';

// Moving pinkCar
echo $pinkCar->forward().'</br>';
echo 'Vitesse de la voiture rose : '. $pinkCar->setCurrentSpeed(20) . 'km/h' . '<br>';
echo $pinkCar->break().'</br>';




// ==========   Red Car   =========
$redCar = new SimpsonsCars ('red', 4, 'essence');
echo $redCar->start().'</br>';

// Moving redCar
echo $redCar->forward().'</br>';
echo 'Vitesse de la voiture rouge : '. $redCar->setCurrentSpeed(30) . 'km/h' . '<br>';
echo $redCar->break().'</br>';






