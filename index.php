<?php
include "Goods.php";
include "TestClasses.php";

$a1= new Clothes(null, "Пальто", "100", "2", "Васечкин", "Кашемир");
echo ($a1->renderGood());

$a2= new Book(null, "Призрак оперы", "50", "5", "2018", "ФигняИздат",
    "Петров", "Зачитаешься, зуб даю!");
echo ($a2->renderGood());

$a3= new Food(null, "Семечки", "10", "10", "2017", "2018");
echo ($a3->renderGood());




