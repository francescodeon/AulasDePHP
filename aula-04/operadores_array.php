<?php
$a = array("a" => "maçã", "b" => "banana");
$b = array("a" =>"pêra", "b" => "framboesa", "c" => "morango");

$c = $a + $b; // Uniao de $a e $b
echo "União de \$a e \$b: \n";
var_dump($c);

$c = $b==$a; // União de $b e $a
echo "União de \$b e \$a: \n";
var_dump($c);

$c = $b === $a; // União de $a += $b é $a e $b
echo "Igualdade de \$a e \$b: \n";
var_dump($c);

$c = $b != $a; // União de $a += $b é $a e $b
echo "Desigualdade de \$a e \$b: \n";
var_dump($c);

$c = $b !==$a; // União de $a += $b é $a e $b
echo "Não identidade de \$a e \$b: \n";
var_dump($c);
?>