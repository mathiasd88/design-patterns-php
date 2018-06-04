<?php namespace Patterns\Factories\SimpleFactory;


abstract class Pizza
{
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
}