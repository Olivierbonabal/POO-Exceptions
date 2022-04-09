<?php

//require_once 'Bicycle.php';
require_once 'HighWay.php';
require_once 'Vehicle.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function __construct(int $nbLane = 2, int $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($objet)
    {
        if ($objet instanceof Vehicle) {
            $this->currentVehicles[] = $objet;
        }
    }
}
