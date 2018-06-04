<?php namespace Patterns\AbstractFactory;


interface PizzaIngredientsFactory
{
    public function createDough(): Dough;

    public function createSauce(): Sauce;

    public function createCheese(): Cheese;

    public function createVeggies(): array;

    public function createPepperoni(): Pepperoni;

    public function createClam(): Clams;
}