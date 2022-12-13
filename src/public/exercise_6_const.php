<?php

// EXERCISE 1
class Beverage {
    // The Properties 
    private string $color;
    private float $price;
    private string $temperature;
    const BARNAME = 'Het Vervlog';

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
    public function test1()
    {
        echo self::BARNAME;
    }
}

$cola1 = new Beverage("black", 2);

$cola1->getInfo();
$cola1->test1();


// EXERCISE 2
class Beer extends Beverage {
    // Properties
    private string $name;
    private float $alcoholPercentage;

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
    public function test2()
    {
        echo self::BARNAME;
    }
}

$duvel1 = new Beer("blond", 3.5, "duvel", 8.5);

$duvel1->getInfo();
$duvel1->getAlcoholPercentage();
$duvel1->test2();