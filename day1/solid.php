<?php


interface DamageCheckable
{
    public function isDamaged(): bool;
}

abstract class CarDetail implements DamageCheckable
{
    protected $isDamaged;

    public function __construct(bool $isDamaged)
    {
        $this->isDamaged = $isDamaged;
    }

    public function isDamaged(): bool
    {
        return $this->isDamaged;
    }
}

class Door extends CarDetail
{
}

class Tyre extends CarDetail
{
}

class Paint extends CarDetail
{
}

class Car implements DamageCheckable
{
    private $details;

    public function __construct(array $details)
    {
        $this->details = $details;
    }

    public function isDamaged(): bool
    {
        foreach ($this->details as $detail) {
            if ($detail->isDamaged()) {
                return true;
            }
        }
        return false;
    }

    public function isPaintingDamaged(): bool
    {
        foreach ($this->details as $detail) {
            if ($detail instanceof Paint && $detail->isDamaged()) {
                return true;
            }
        }
        return false;
    }
}

$car = new Car([
    new Door(false),
    new Tyre(false),
    new Paint(true),
]);

var_dump($car->isDamaged());
var_dump($car->isPaintingDamaged());