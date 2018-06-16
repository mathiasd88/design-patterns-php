<?php namespace Patterns;

use Patterns\AbstractFactory\PizzaTestDrive;
use Patterns\Factories\FactoryMethod\FactoryPizzaTestDrive;
use Patterns\Factories\SimpleFactory\SimplePizzaTestDrive;
use Patterns\Singleton\Classic\MainSingleton;
use Patterns\Strategy\MiniDuckSimulator;
use Patterns\Observer\WeatherStation;
use Patterns\Decorator\StarbuzzCoffee;

/**
 * Strategy Pattern
 */
MiniDuckSimulator::main();

/**
 * Observer Pattern
 */
WeatherStation::main();

/**
 * Decorator Pattern
 */
StarbuzzCoffee::main();

/**
 * Simple Factory "Pattern"
 */
SimplePizzaTestDrive::main();

/**
 * Factory Method Pattern
 */
FactoryPizzaTestDrive::main();

/**
 * AbstractFactory Pattern
 */
PizzaTestDrive::main();

/**
 * Classic Singleton Pattern
 */
MainSingleton::main();