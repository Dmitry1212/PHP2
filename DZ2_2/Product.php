<?php


abstract class Product
{
    private $id;
    private $name;
    private $price;
    private $dohod;

    use SingletonTrait;

//    private function __construct($id, $name, $price, $dohod)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->price = $price;
//        $this->dohod = $dohod;
//    }

    abstract function calcCost($count);

    abstract function calcDohod($count);

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDohod()    {
        return $this->dohod;
    }

    public function setDohod($dohod)    {
        $this->dohod = $dohod;
    }


}