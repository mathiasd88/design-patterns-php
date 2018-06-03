<?php namespace Patterns\Decorator;


class Whip extends CondimentDecorator
{
    private $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost()
    {
        return $this->beverage->cost() + .10;
    }
}