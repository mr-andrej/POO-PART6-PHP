<?php

// index.php

require_once 'car.php';
require_once 'bicycle.php';
require_once 'vehicle.php';
require_once 'truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Speedometer.php';

echo Speedometer :: convertKmToMiles (10);