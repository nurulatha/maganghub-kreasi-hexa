<?php
require_once('animal.php');
require_once('ape.php');
require_once('frog.php');
$sheep = new Animal("shaun");
$sungokong = new Ape("kera sakti");
$kodok = new Frog("buduk");
echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold blooded : " . $sheep->cold_blooded . "<br> <br>";

echo "Name : " . $sungokong->name . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "Cold blooded : " . $sungokong->cold_blooded . "<br>";
echo "Yell : " . $sungokong->yell() . "<br> <br>";

echo "Name : " . $kodok->name . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "Cold blooded : " . $kodok->cold_blooded . "<br>";
echo "Jump : " . $kodok->jump() . "<br>";
