<?php


class WeightProduct extends Product
{
    public function __construct($id, $name, $price, $dohod=0.2)    {
        parent::__construct($id, $name, $price, $dohod);
    }

    public function calcDohod($weight)    {
        return $this->calcCost($weight)*$this->getDohod();
    }

    public function calcCost($count)   {
        return $this->getPrice()*$count;
    }

}