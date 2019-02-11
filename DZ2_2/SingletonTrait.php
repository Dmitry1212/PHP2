<?php
trait SingletonTrait {

    private static $instance;  // Экземпляр объекта
// Защищаем от создания через new Singleton
//    private function __construct($id, $name, $price, $dohod) { /* ... @return Singleton */ }
// Защищаем от создания через клонирование
    private function __clone() { /* ... @return Singleton */ }
// Защищаем от создания через unserialize
    private function __wakeup()  { /* ... @return Singleton */ }
// Возвращает единственный экземпляр класса. @return Singleton
    public static function getInstance($id, $name, $price, $dohod) {
        if ( empty(self::$instance) ) {
            self::$instance = new self($id, $name, $price, $dohod);
        }
        return self::$instance;
    }

}