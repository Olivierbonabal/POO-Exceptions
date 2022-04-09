<?php

require_once 'HighWay.php';
require_once "Cars.php";

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function __construct(int $nbLane = 4, int $maxSpeed = 130){
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($objet)
    {
        if($objet instanceof Cars){
            $this->currentVehicles[] = $objet;
        }
    }
}
