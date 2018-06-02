<?php namespace Patterns\Strategy;


class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new NormalQuack();
    }

    public function display()
    {
        echo "I am a real Mallard Duck \n";
    }
}