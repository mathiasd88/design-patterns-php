<?php namespace Patterns\Strategy;


class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    function display()
    {
        echo "I am a model duck \n";
    }
}