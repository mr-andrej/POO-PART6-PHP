<?php


final class ResidentialWay extends HighWay
{
    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 2, 50); // nbLane = 2, maxSpeed = 50;
    }

     public function addVehicle(Vehicle $vehicle): void
     {
         if ($vehicle instanceof Vehicle)
             $this->currentVehicles[] = $vehicle; // Any vehicle can go on a Res. way
     }

}