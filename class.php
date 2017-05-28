<?php

class HumanBeing
{
    public $head;

    private $brain;

    public function __construct($headSize, $brainCapacity)
    {
        $this->setHead($headSize);
        $this->setBrain($brainCapacity);
    }

    public function setHead($headSize)
    {
        $this->head = $headSize;
    }

    final public function getHead()
    {
        return $this->head;
    }

    public function setBrain($brainCapacity)
    {
        $this->brain = $brainCapacity;
    }

    private function getBrain()
    {
        return $this->brain;
    }
}

$human = new HumanBeing("Giant Head", "low");
$human->getBrain();
var_dump($human);

// class Man extends HumanBeing
// {
//     public function getHead()
//     {
//         return "Headless";
//     }
// }

// $man = new Man();
// $man->setBrain('Watery Brain');
// echo $man->getHead();
// var_dump($man);
