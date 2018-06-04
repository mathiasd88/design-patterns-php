<?php namespace Patterns\AbstractFactory;


abstract class PizzaStore
{
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    protected abstract function createPizza(string $type): Pizza;
}