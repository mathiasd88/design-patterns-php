<?php namespace Patterns\Strategy;


class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak";
    }
}