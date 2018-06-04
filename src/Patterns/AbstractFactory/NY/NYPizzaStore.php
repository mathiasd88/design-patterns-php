<?php namespace Patterns\AbstractFactory\NY;


use Patterns\AbstractFactory\CheesePizza;
use Patterns\AbstractFactory\ClamPizza;
use Patterns\AbstractFactory\PepperoniPizza;
use Patterns\AbstractFactory\Pizza;
use Patterns\AbstractFactory\PizzaStore;
use Patterns\AbstractFactory\VeggiePizza;

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        $pizza = null;

        $ingredientFactory = new NYPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('New York Style Cheese Pizza');
        } else if ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('New York Style Pepperoni Pizza');
        } else if ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('New York Style Clam Pizza');
        } else if ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('New York Style Veggie Pizza');
        }

        return $pizza;
    }
}