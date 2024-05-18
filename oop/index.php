<?php
    require_once('animal.php');
    require_once('frog.php');
    require_once('ape.php');

   $shaun = new animal('shaun'); 

   echo "Name : " . $shaun->name . "<br>";
   echo "legs : " . $shaun->legs . "<br>";
   echo "cold blooded: " . $shaun->cold_blooded . "<br> <br>";

   $buduk = new frog('buduk'); 
   echo "Name : " . $buduk->name . "<br>";
   echo "legs : " . $buduk->legs . "<br>";
   echo "cold blooded: " . $buduk->cold_blooded . "<br>";
   echo "Jump: " . $buduk->jump . "<br> <br>";

   $sungokong = new Ape('kera sakti');
   echo "Name : " . $sungokong->name . "<br>";
   echo "legs : ". $sungokong->legs . "<br>"; 
   echo "cold blooded: ". $sungokong->cold_blooded . "<br>"; 
   echo "Yell: " . $sungokong->yell. "<br>"; 

?>