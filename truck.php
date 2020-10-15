<?php

// truck.php

class truck extends Vehicle
{
    /**
     * @var int
     */
    public $storageCapacity;

    /**
     * @var int
     */
    public $currentLoad = 0; // Starts off empty

    public function __construct(string $color, int $nbSeats, int $storageCapacity, string $energy, int $energyLevel)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;
        $this->energyLevel = $energyLevel;
    }

    public function isTruckFull(): string
    {
        if ($this->energyLevel < 100) // Maximum is 100 (%)
            return "This truck isn't full!";
        else
            return "This truck is full";
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = $currentLoad;
    }

}