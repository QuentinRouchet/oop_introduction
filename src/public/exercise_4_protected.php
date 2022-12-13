<?php

// EXERCISE 1
class Beverage {
    // The Properties 
    protected string $color;
    protected float $price;
    protected string $temperature;

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
    // exo 3
    public function changeColor($color)
    {
        $this->color = $color;
    }
}

// EXERCISE 2
class Beer extends Beverage {
    // Properties
    protected string $name;
    protected float $alcoholPercentage;

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

    public function beerInfo()
    {   
        echo "Hi I'm $this->name and have an alcohol percentage of $this->alcoholPercentage and i have a $this->color color";
    }
}

$duvel1 = new Beer("blond", 3.5, "duvel", 8.5);

$duvel1->getInfo();
$duvel1->getAlcoholPercentage();
// exo 3
$duvel1->changeColor('light');
$duvel1->getInfo();

$duvel1->beerInfo();