<?php namespace Patterns\Factories\FactoryMethod;


class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Cheese Pizza';
    }
}