<?php
require_once("Cow.php");
require_once("Chicken.php");
class Farm{
    protected $animals=[];
    public function AddAnimal(Animal $animal){
        $this->animals[]=$animal;
    }
    public function CollectProduct($num){
        $milk=0;
        $eggs=0;
        for($i=0;$i<$num;$i++){
        foreach($this->animals as $animal){
            if($animal instanceof Chicken)
            $eggs+=$animal->CollectProduct();
            if($animal instanceof Cow)
            $milk+=$animal->CollectProduct();
        }
    }
        echo "Общее кол-во продукции:\n";
        echo "Молоко: ".$milk."\n"."Яйца: ".$eggs."\n";
    } 
    public function DisplayInfo(){
        $cows=0;
        $chickens=0;
        foreach($this->animals as $animal){
            if($animal instanceof Chicken)
            $chickens++;
            if($animal instanceof Cow)
            $cows++;
        }
        echo "Кол-во коров: ".$cows."\n"."Кол-во куриц: ".$chickens."\n";
    }
}
?>