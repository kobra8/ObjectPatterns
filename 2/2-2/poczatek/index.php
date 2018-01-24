<?php
// Prosta fabryka

class Vehicle {
    protected $name;

    public function getName() {
        return $this-> name;
    }
}

class Car extends Vehicle {
    function __construct($name) {
        $this->name = $name;
    }
}

class CarFactory {
    public static function createCar($name) {
        return new Car($name);
    }
}

$car = CarFactory::createCar('Ford');
$car2 = CarFactory::createCar('Honda');

echo $car->getName();
echo"<br>";
echo $car2->getName();
 
?>