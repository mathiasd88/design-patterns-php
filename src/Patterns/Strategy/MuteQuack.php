<?php namespace Patterns\Strategy;


class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo "<< Silence >>";
    }
}