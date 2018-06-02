<?php namespace Patterns\Observer;


class WeatherStation
{
    public static function main()
    {
        $weatherData = new WeatherData();

        $currentDisplay = new CurrentConditionalDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 80, 29.2);
        $weatherData->setMeasurements(78, 90, 29.2);
    }
}