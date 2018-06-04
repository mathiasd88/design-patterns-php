<?php namespace Patterns\Factories\FactoryMethod;


abstract class Pizza
{
    protected $name;

    public function prepare()
    {
        echo "Preparing pizza...\n";
    }

    public function bake()
    {
        echo "Baking pizza...\n";
    }

    public function cut()
    {
        echo "Cutting pizza...\n";
    }

    public function box()
    {
        echo "Boxing pizza...\n";
    }

    public function getName()
    {
        return $this->name;
    }
}