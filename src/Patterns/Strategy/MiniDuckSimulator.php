<?php namespace Patterns\Strategy;


class MiniDuckSimulator
{
    public static function main()
    {
        $duck = new MallardDuck();
        $duck->performFly();
        $duck->performQuack();
    }
}