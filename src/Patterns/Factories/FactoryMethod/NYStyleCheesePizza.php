<?php namespace Patterns\Factories\FactoryMethod;


class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY Style Cheese Pizza';
    }
}