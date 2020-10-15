<?php


final class MotorWay extends HighWay
{
    public function __construct(array $currentVehicles)
    {
        parent::__construct($currentVehicles, 4, 130); // nbLane = 4, maxSpeed = 130;
    }

    public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck)
            $this->currentVehicles[] = $vehicle; // Both cars and trucks can go on motorways
    }
}