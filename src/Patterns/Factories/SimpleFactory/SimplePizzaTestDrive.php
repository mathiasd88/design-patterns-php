<?php


namespace Patterns\Factories\SimpleFactory;


class SimplePizzaTestDrive
{
    public static function main()
    {
        $store = new PizzaStore(new SimplePizzaFactory());
        $store->orderPizza('cheese');
    }
}