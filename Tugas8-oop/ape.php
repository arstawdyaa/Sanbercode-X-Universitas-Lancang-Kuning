<?php
require_once("animal.php");
class Ape extends Animal {
    public function yell (){
        return "Auooo";
    }
    public function __construct($string) {
        parent::__construct($string);
        $this->legs = 2;
    }
}

?>