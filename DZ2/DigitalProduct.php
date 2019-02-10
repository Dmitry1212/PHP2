<?php


class DigitalProduct extends PieceProduct
{
    public function __construct($id, $name, $fullPrice, $dohod = 1)    {
        $this->setPrice( $fullPrice/2);
        parent::__construct($id, $name, $this->getPrice(), $dohod);
    }

    public function calcCost($count)    {
        return $this->getPrice()*$count;
    }
}