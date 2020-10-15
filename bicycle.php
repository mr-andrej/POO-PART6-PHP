<?php

require_once 'vehicle.php';

// bicycle.php

class Bicycle extends Vehicle
{
    /**
     * @var string
     */
    protected $brand;

    /**
     * @var int
     */
    protected $nbWheels = 2;

    /**
     * @var int
     */
    protected $nbSeats = 1;

    /**
     * @var boolean
     */
    public $hasLuggageRack = false;

    public function switchOn(): boolean
    {
        if ($this->currentSpeed>10)
            return true;
        else
            return false;
    }

    public function switchOff(): boolean
    {
        return false;
    }
}
