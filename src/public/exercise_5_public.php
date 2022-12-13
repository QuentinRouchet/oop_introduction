<?php

// EXERCISE 1
class Beverage {
    // The Properties 
    private string $color;
    private float $price;
    private string $temperature;

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
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

$cola1 = new Beverage("black", 2);

$cola1->getInfo();

$cola1->setPrice(3.5);

$cola1->getInfo();
