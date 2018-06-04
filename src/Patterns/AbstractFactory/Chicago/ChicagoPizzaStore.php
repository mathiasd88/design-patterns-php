<?php namespace Patterns\AbstractFactory\Chicago;


use Patterns\AbstractFactory\CheesePizza;
use Patterns\AbstractFactory\ClamPizza;
use Patterns\AbstractFactory\PepperoniPizza;
use Patterns\AbstractFactory\PizzaStore;
use Patterns\AbstractFactory\Pizza;
use Patterns\AbstractFactory\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        $ingredientFactory = new ChicagoPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } else if ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        } else if ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } else if ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        }

        return $pizza;
    }
}