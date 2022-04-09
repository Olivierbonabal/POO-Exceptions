<?php

require_once 'Vehicle.php';

class Cars extends Vehicle
{
     public const ALLOWED_ENERGIES = [
        "fuel",
        "electric",
    ];

    private string $energy;
    private int $energyLevel = 10;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Cars
    {
        if (in_array($energy, self::ALLOWED_ENERGIES))
        {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    
    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
    
    public function isParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function start(): string
    {
        $this->currentSpeed === 0;
        
        if($this->hasParkBrake === true) 
        {
            throw new Exception('le frein à main est serré');
        }
        return ' On est prêt';
    }
}

