<?php

require_once('animal.php');
require_once('frog.php');
require_once('ape.php');

$sheep = new Animal("shaun");

echo "Animal Name  : " . $sheep->name . "<br>"; // "shaun"
echo "Number of Feet : " . $sheep->legs . "<br>"; // 4
echo "Cold Blooded : " . $sheep->cold_blooded . "<br><br>"; // "no"

$kodok = new Frog("buduk");

echo "Animal Name  : " . $kodok->name . "<br>";
echo "Number of Feet : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo $kodok->jump() . " is her voice <br><br>"; // "hop hop"

$sungokong = new Ape("kera sakti");

echo "Animal Name  : " . $sungokong->name . "<br>";
echo "Number of Feet : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo $sungokong->yell() . " is her voice"; // "Auooo"
