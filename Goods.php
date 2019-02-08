<?php


class Goods
{
    protected  $id;
    protected  $name;
    protected  $availability;
    protected  $price;

    public function __construct($id, $name, $price, $availability  )    {
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->availability=$availability;
    }

    public function renderGood(){
        $str = '';
        $str .= "<h1> {$this->name}</h1>";
        $str .= "<h2> Цена: {$this->price}, доступно со склада {$this->availability} шт.</h2>";
        return $str;
    }

    public function getId()    {
        return $this->id;
    }

    public function setId($id)    {
        $this->id = $id;
    }

    public function getName()    {
        return $this->name;
    }

    public function setName($name)    {
        $this->name = $name;
    }

    public function getPrice()    {
        return $this->price;
    }

    public function setPrice($price)    {
        $this->price = $price;
    }

    public function getDiscription()    {
        return $this->discription;
    }

    public function setDiscription($discription)    {
        $this->discription = $discription;
    }
}
class Clothes extends Goods {
    protected $designer;
    protected $material;
    public function __construct($id, $name, $price, $availability, $designer, $material)
    {
        parent::__construct($id, $name, $price, $availability);
        $this->designer = $designer;
        $this->material = $material;
    }
    public function renderGood()
    {
        $str = '';
        $str .=  parent::renderGood();
        $str .= "<p>Изготовлено {$this->designer} из {$this->material} специально для Вас! </p> ";
        return $str;
    }
    public function getDesigner()
    {
        return $this->designer;
    }
    public function setDesigner($designer)
    {
        $this->designer = $designer;
    }
    public function getMaterial()
    {
        return $this->material;
    }
    public function setMaterial($material)
    {
        $this->material = $material;
    }
}
class Book extends Goods {
    protected $year;
    protected $publisher;
    protected $author;
    protected $annotation;
    public function __construct($id, $name, $price, $availability, $year, $publisher, $author, $annotation)
    {
        parent::__construct($id, $name, $price,  $availability);
        $this->year = $year;
        $this->publisher = $publisher;
        $this->author = $author;
        $this->annotation = $annotation;
    }
    public function renderGood()
    {
        $str = '';
        $str .=  parent::renderGood();
        $str .= "<p>Автор: {$this->author}, {$this->year} год </p>";
        $str .= "<p>Издательство: {$this->publisher} </p> ";
        $str .= "<p>Кратко о книге от издательства: {$this->annotation} </p> ";
        return $str;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function setYear($year)
    {
        $this->year = $year;
    }
    public function getPublisher()
    {
        return $this->publisher;
    }
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }
    public function getAuthor()
    {
        return $this->author;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function getAnnotation()
    {
        return $this->annotation;
    }
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;
    }
}
class Food extends Goods
{
    protected $dateOfManufacture;
    protected $expirationDate;

    public function __construct($id, $name, $price, $availability, $dateOfManufacture, $expirationDate)
    {
        parent::__construct($id, $name, $price, $availability);
        $this->dateOfManufacture = $dateOfManufacture;
        $this->expirationDate = $expirationDate;
    }

    public function renderGood()
    {
        $str = '';
        $str .= parent::renderGood();
        $str .= "<p>Произведено: {$this->dateOfManufacture} , годен до: {$this->expirationDate}</p>";
        return $str;
    }

    public function getDateOfManufacture()
    {
        return $this->dateOfManufacture;
    }

    public function setDateOfManufacture($dateOfManufacture)
    {
        $this->dateOfManufacture = $dateOfManufacture;
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }
}