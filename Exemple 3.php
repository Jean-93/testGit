<?php

$maths = 18;
$anglais = 12;
$histoire = 9;

$moyenne = ($maths + $anglais + $histoire) / 3;

if ($moyenne >= 10 && $moyenne <15) {
    echo "Votre moyenne est de " . $moyenne . " (mention : assez bien !)";
}

else if ($maths<= 6) {

    echo "Votre moyenne est de " . $moyenne . " (mention : bien !)";
}