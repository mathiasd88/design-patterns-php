<?php namespace Patterns\AbstractFactory;


use Patterns\AbstractFactory\Chicago\ChicagoPizzaStore;
use Patterns\AbstractFactory\NY\NYPizzaStore;

class PizzaTestDrive
{
    public static function main()
    {
        $nyPizzaStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyPizzaStore->orderPizza('cheese');
        echo "Ethan ordered a " . $pizza->getName() . "\n";

        $pizza = $chicagoStore->orderPizza('cheese');
        echo "Joel ordered a " . $pizza->getName() . "\n";
    }
}