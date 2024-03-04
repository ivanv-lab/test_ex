<?php
require_once("Animal.php");
class Cow extends Animal{
    public function CollectProduct(){
        return $milk=rand(8,12);
    }
}
?>