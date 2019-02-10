<?php


class PieceProduct extends Product
{


    public function __construct($id, $name, $price, $dohod=0.3)    {
        parent::__construct($id, $name, $price, $dohod);
    }


    public function calcDohod($count)    {
        return $this->calcCost($count)*$this->getDohod();
    }

    public function calcCost($count)   {
        return $this->getPrice()*$count;
    }


}