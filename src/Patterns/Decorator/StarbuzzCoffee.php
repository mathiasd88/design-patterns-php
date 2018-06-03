<?php namespace Patterns\Decorator;


class StarbuzzCoffee
{
    public static function main()
    {
        $beverage = new Expresso();

        echo $beverage->getDescription() . ' $' . $beverage->cost() . "\n";

        $beverage2 = new Whip(new Mocha(new Mocha(new DarkRoast())));

        echo $beverage2->getDescription() . ' $' . $beverage2->cost() . "\n";
    }
}