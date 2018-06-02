<?php namespace Patterns\Strategy;


class NormalQuack implements QuackBehavior
{

    public function quack()
    {
        echo "NormalQuack";
    }
}