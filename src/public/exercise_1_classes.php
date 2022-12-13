<?php

// EXERCISE 1
class Beverage {
    // The Properties 
    public string $color;
    public float $price;
    public string $temperature;

    //The Constructor with incoming parameters in the brackets
    public function __construct($color, $price, $temperature="cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    // The functions
    public function getInfo()
    {
        echo "This beverage is $this->temperature and $this->color. It cost $this->price euros. <br>";
    }
}

$cola1 = new Beverage("black", 2);

$cola1->getInfo();


// EXERCISE 2
class Beer extends Beverage {
    // Properties
    public string $name;
    public float $alcoholPercentage;

    // Construct
    public function __construct($color, $price, $name, $alcoholPercentage, $temperature="cold")
    {
        parent::__construct($color, $price, $temperature="cold");
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }

    // Function
    public function getAlcoholPercentage()
    {
        echo "Percentage of alcohol:$this->alcoholPercentage, his name is $this->name.";
    }
}

$duvel1 = new Beer("blond", 3.5, "duvel", 8.5);

$duvel1->getInfo();
$duvel1->getAlcoholPercentage();