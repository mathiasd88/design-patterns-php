<?php namespace Patterns\Observer;


class CurrentConditionalDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private $weatherData;

    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display()
    {
        echo "Current conditions: $this->temperature F degrees and $this->humidity % humidity \n";
    }

    public function update(float $temp, float $humidity, float $pressure)
    {
        $this->temperature = $temp;
        $this->humidity = $humidity;
        $this->display();
    }
}