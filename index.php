<?php

spl_autoload_register(function ($name){
    require "DZ2_2/$name.php";
});

// DZ1
//include "Goods.php";
//include "TestClasses.php";
//
//$a1= new Clothes(null, "Пальто", "100", "2", "Васечкин", "Кашемир");
//echo ($a1->renderGood());
//
//$a2= new Book(null, "Призрак оперы", "50", "5", "2018", "ФигняИздат",
//    "Петров", "Зачитаешься, зуб даю!");
//echo ($a2->renderGood());
//
//$a3= new Food(null, "Семечки", "10", "10", "2017", "2018");
//echo ($a3->renderGood());

//DZ2

//$a = new PieceProduct(null, "Книга", 100);
//var_dump($a->calcDohod(3));
//
//$b = new DigitalProduct(null, "DigitalBook", 100);
//var_dump($b->calcDohod(2));
//
//$c = new WeightProduct(null, "Рис", 15);
//var_dump($c->calcDohod(1.45));

$a = PieceProduct::getInstance();
var_dump($a);

