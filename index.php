<?php
class Good {
    protected $id;
    protected $name;
    protected $price;
    protected $image;
    protected $availability;

    /**
     * Good constructor.
     * @param $id
     * @param $name
     * @param $price
     * @param $image
     * @param $availability
     */
    public function __construct($id, $name, $price, $image, $availability)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->availability = $availability;
    }

    public function renderGood(){
        $str = '';
        $str .= "<h1> {$this->name}</h1>";
        $str .= "<h2> Цена: {$this->price}, доступно со склада {$this->availability} шт.</h2>";
        $str .= "<img src='{$this->image}'>";
        return $str;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setAvailability($availability)
    {
        $this->availability = $availability;
    }

}

class Clothes extends Good {
    protected $designer;
    protected $material;

    public function __construct($id, $name, $price, $image, $availability, $designer, $material)
    {
        parent::__construct($id, $name, $price, $image, $availability);
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

class Book extends Good {
    protected $year;
    protected $publisher;
    protected $author;
    protected $annotation;

    public function __construct($id, $name, $price, $image, $availability, $year, $publisher, $author, $annotation)
    {
        parent::__construct($id, $name, $price, $image, $availability);

        $this->year = $year;
        $this->publisher = $publisher;
        $this->author = $author;
        $this->annotation = $annotation;
    }

    public function renderGood()
    {
        $str = '';
        $str .=  parent::renderGood();
        $str .= "<p>Автор {$this->author} </p>, {$this->year} год ";
        $str .= "<p>Издательство {$this->publisher} </p> ";
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

class Food extends Good {
    protected $dateOfManufacture;
    protected $expirationDate;

    public function __construct($id, $name, $price, $image, $availability, $dateOfManufacture, $expirationDate)
    {
        parent::__construct($id, $name, $price, $image, $availability);

        $this->dateOfManufacture = $dateOfManufacture;
        $this->expirationDate = $expirationDate;
    }

    public function renderGood()
    {
        $str = '';
        $str .=  parent::renderGood();
        $str .= "<p>Произведено: {$this->dateOfManufacture} </p>, годен до: {$this->expirationDate}";
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
