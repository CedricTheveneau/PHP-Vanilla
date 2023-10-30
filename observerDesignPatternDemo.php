<?php
// Cette classe est observée par currentWeatherDisplay
class WeatherStation
{

    private $observers = [];
    private $temperature;
    private $humidity;
    private $pressure;

    public function addObserver(currentWeatherDisplay $observer)
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(currentWeatherDisplay $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notifyObserver()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->notifyObserver();
    }
}

// Cette classe observe WeatherStation
class currentWeatherDisplay
{
    private $temperature = 'non définit';
    private $humidity = 'non définit';
    private $pressure = 'non définit';
    private $appareil;

    public function __construct($appareil)
    {
        $this->appareil = $appareil;
        $this->display();
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->display();
    }

    public function display()
    {
        echo "<br/>{$this->appareil} - Conditions actuelles : {$this->temperature}°C et {$this->humidity}% d'humidité<br/>";
    }
}

$weatherStation = new WeatherStation();
$currentDisplay1 = new currentWeatherDisplay('Ecran principal');
$currentDisplay2 = new currentWeatherDisplay('Ordinateur');
$currentDisplay3 = new currentWeatherDisplay('Tablette');

$weatherStation->addObserver($currentDisplay1);
$weatherStation->addObserver($currentDisplay2);
$weatherStation->addObserver($currentDisplay3);

$weatherStation->setMeasurements(25, 65, 1012.2);
$weatherStation->setMeasurements(27, 67, 1014.2);
