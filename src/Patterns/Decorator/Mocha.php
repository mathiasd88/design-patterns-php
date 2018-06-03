<?php namespace Patterns\Decorator;


class Mocha extends CondimentDecorator
{
    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost()
    {
        return $this->beverage->cost() + .20;
    }
}