<?php namespace Patterns\Strategy;


class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo "I am flying";
    }
}