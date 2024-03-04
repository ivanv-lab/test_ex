<?php
require_once("Animal.php");
class Chicken extends Animal{
    public function CollectProduct(){
        return $eggs=rand(0,1);
    }
}
?>