<?php namespace Patterns\Strategy;


class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo "I can't fly \n";
    }
}