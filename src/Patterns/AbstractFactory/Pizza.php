<?php namespace Patterns\AbstractFactory;


abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Dough
     */
    protected $dough;

    /**
     * @var Sauce
     */
    protected $sauce;

    /**
     * @var array
     */
    protected $veggies = [];

    /**
     * @var Cheese
     */
    protected $cheese;

    /**
     * @var Pepperoni
     */
    protected $pepperoni;

    /**
     * @var Clams
     */
    protected $clam;

    abstract public function prepare();

    public function bake()
    {
        echo "Bake for 25 minutes at 350 \n";
    }

    public function cut()
    {
        echo "Cutting the pizza into diagonal slices \n";
    }

    public function box()
    {
        echo "Place pizza in official PizzaStore box \n";
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}