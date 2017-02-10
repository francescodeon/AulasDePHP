<?php

/*	Operadores combinados é uma junçao dos operadores:
 * 		Aritméticos;
 * 		Array;
 * 		String.
 */

//Aritméticos:

$a=$b=1;
echo $a+=$b; echo "\n";
echo $a-=$b; echo "\n";
echo $a/=$b; echo "\n";
echo $a*=$b; echo "\n";
echo $a%=$b; echo "\n";
echo $a**=$b; echo "\n";

//Strings:

$a='Bom';
$b=' ';
$c='Dia';
$a.=$b;
echo $a; echo "\n";
$a.=$c;
echo $a; echo "\n";

//Arrays:

$a=array ('Brasil','Campeão');
$b=array ('Copa do Mundo');
$a+=$b;
print_r($a);




