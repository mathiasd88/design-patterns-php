<?php namespace Patterns\AbstractFactory\NY;


use Patterns\AbstractFactory\Cheese;
use Patterns\AbstractFactory\Clams;
use Patterns\AbstractFactory\Dough;
use Patterns\AbstractFactory\Ingredients\FreshClams;
use Patterns\AbstractFactory\Ingredients\Garlic;
use Patterns\AbstractFactory\Ingredients\MarinaraSauce;
use Patterns\AbstractFactory\Ingredients\Mushroom;
use Patterns\AbstractFactory\Ingredients\Onion;
use Patterns\AbstractFactory\Ingredients\RedPepper;
use Patterns\AbstractFactory\Ingredients\ReggianoCheese;
use Patterns\AbstractFactory\Ingredients\SlicedPepperoni;
use Patterns\AbstractFactory\Ingredients\ThinCrustDough;
use Patterns\AbstractFactory\Pepperoni;
use Patterns\AbstractFactory\PizzaIngredientsFactory;
use Patterns\AbstractFactory\Sauce;

class NYPizzaIngredientFactory implements PizzaIngredientsFactory
{

    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [new Garlic(), new Onion(), new Mushroom(), new RedPepper()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FreshClams();
    }
}