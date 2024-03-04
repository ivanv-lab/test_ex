<?php
require_once("Farm.php");
require_once("Cow.php");
require_once("Chicken.php");
$farm=new Farm();
//Добавление животных
for($i=0;$i<20;$i++)
    $farm->AddAnimal(new Chicken($i));
for($i=0;$i<5;$i++)
    $farm->AddAnimal(new Cow($i));
//Вывод информации
echo "Количество животных на ферме\n";
$farm->DisplayInfo();
//Сбор продукции
echo "Сбор продукции\n";
$farm->CollectProduct(7);
//Добавление животных
for($i=0;$i<5;$i++)
$farm->AddAnimal(new Chicken(20+$i));
$farm->AddAnimal(new Cow(6));
//Вывод информации
echo "Количество животных на ферме\n";
$farm->DisplayInfo();
//Сбор продукции
echo "Сбор продукции\n";
$farm->CollectProduct(7);
?>