<?php
abstract class CarDetail {
   protected $isBroken;
   public function __construct($isBroken)
   {
       $this->isBroken = $isBroken;
   }
   public function isBroken()
   {
       return $this->isBroken;
   }
}

class Door extends CarDetail
{
}

class Tyre extends CarDetail
{
}
class Car
{
   private $details;
   public function __construct(array $details)
   {
       $this->details = $details;
   }
   public function isBroken()
   {
       foreach ($this->details as $detail) {
           if ($detail->isBroken()) {
               return true;
           }
       }
       return false;
   }
   public function isPaintingDamaged()
   {
       // MAKE AN IMPLEMENTATION
   }
}
$car = new Car([new Door(true), new Tyre(false)]); // we pass a list of all details