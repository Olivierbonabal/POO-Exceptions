<?php

require_once 'Bicycle.php';
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    //protected int $nbLane = 1;
    //protected int $maxSpeed = 10;

    public function __construct(int $nbLane = 1, int $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($objet)
    {
        if ($objet instanceof Bicycle || $objet instanceof Skateboard) {
            $this->currentVehicles[] = $objet;
        }
    }
}

