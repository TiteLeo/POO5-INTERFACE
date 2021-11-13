<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private int $energyLevel;
    private bool $hasParkBrake = true;

    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff() : bool
    {
        return false;
    }

public function start()
{
    if ($this->hasParkBrake) {
        throw new Exception('Your ParkBrake Dude!!');
    }
    echo 'Go baby!!!';
}

public function setParkBrake()
{
    $this->hasParkBrake = !$this->hasParkBrake;
}

public function getParkBrake(): bool
{
    return $this->hasParkBrake;
}