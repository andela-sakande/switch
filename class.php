<?php

class HumanBeing
{
    public $head;

    private $brain;

    public function setHead($headSize)
    {
        $this->head = $headSize;
    }

    public function getHead()
    {
        return $this->head;
    }

    public function setBrain($brainCapacity)
    {
        $this->brain = $brainCapacity;
    }

    public function getBrain()
    {
        return $this->brain;
    }
}

$human = new HumanBeing();
$human->setHead('Big Head');
echo $human->getHead();

$human2 = new HumanBeing();
$human2->setHead('Small Head');
$human2 ->setBrain('low');
echo $human2->getHead();
echo $human2->getBrain();
