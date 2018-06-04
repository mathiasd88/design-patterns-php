<?php namespace Patterns\Factories\SimpleFactory;


class PizzaStore
{
    private $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type)
    {
        $pizza = $this->factory->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}