<?php namespace Patterns\Factories\FactoryMethod;


class FactoryPizzaTestDrive
{
    public static function main()
    {
        $nyStore = new NYPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo "Ethan ordered a " . $pizza->getName() . "\n";

        $pizza = $chicagoStore->orderPizza('cheese');
        echo "Joel ordered a " . $pizza->getName() . "\n";
    }
}