<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private int $stockCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setStockCapacity($stockCapacity);
    }

    public function setStockCapacity(int $stockCapacity)
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function getStockCapacity()
    {
        return $this->stockCapacity;
    }

    public function setEnergy(string $energy)
    {
        $this->energy = $energy;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function loading(): string
    {
        $cargo = "";
        if ($this->loading < $this->stockCapacity) {
            $cargo .= "In filling";
        }
        if ($this->loading == $this->stockCapacity) {
            $cargo .= "Full";
        }
        return $cargo;
    }
    
}
