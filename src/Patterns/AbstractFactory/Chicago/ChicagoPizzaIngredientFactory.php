<?php namespace Patterns\AbstractFactory\Chicago;


use Patterns\AbstractFactory\Cheese;
use Patterns\AbstractFactory\Clams;
use Patterns\AbstractFactory\Dough;
use Patterns\AbstractFactory\Ingredients\BlackOlives;
use Patterns\AbstractFactory\Ingredients\EggPlant;
use Patterns\AbstractFactory\Ingredients\FrozenClams;
use Patterns\AbstractFactory\Ingredients\MozzarellaCheese;
use Patterns\AbstractFactory\Ingredients\PlumTomatoSauce;
use Patterns\AbstractFactory\Ingredients\SlicedPepperoni;
use Patterns\AbstractFactory\Ingredients\Spinash;
use Patterns\AbstractFactory\Ingredients\ThickCrustDough;
use Patterns\AbstractFactory\Pepperoni;
use Patterns\AbstractFactory\PizzaIngredientsFactory;
use Patterns\AbstractFactory\Sauce;

class ChicagoPizzaIngredientFactory implements PizzaIngredientsFactory
{

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [new Spinash(), new EggPlant(), new BlackOlives()];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clams
    {
        return new FrozenClams();
    }
}