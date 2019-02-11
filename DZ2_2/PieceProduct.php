<?php


class PieceProduct extends Product{



    private function __construct($id, $name, $price, $dohod=0.3)    {
        parent::__construct($id, $name, $price, $dohod);
    }

    use SingletonTrait;
//
//    private static $instance;  // Экземпляр объекта
//// Защищаем от создания через new Singleton
////    private function __construct($id, $name, $price, $dohod) { /* ... @return Singleton */ }
//// Защищаем от создания через клонирование
//    private function __clone() { /* ... @return Singleton */ }
//// Защищаем от создания через unserialize
//    private function __wakeup()  { /* ... @return Singleton */ }
//// Возвращает единственный экземпляр класса. @return Singleton
//    public static function getInstance($id, $name, $price, $dohod) {
//        if ( empty(self::$instance) ) {
//            self::$instance = new self($id, $name, $price, $dohod);
//        }
//        return self::$instance;
//    }

    public function setNewParams($id, $name, $price, $dohod){
        $this->setId($id);
        $this->setName($name);
        $this->setPrice($price);
        $this->setDohod($dohod);
    }

    public function calcDohod($count)    {
        return $this->calcCost($count)*$this->getDohod();
    }

    public function calcCost($count)   {
        return $this->getPrice()*$count;
    }
}