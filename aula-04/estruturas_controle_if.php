<?php
$dia=true;

if($dia){
	echo 'É Dia!'; echo"\n";
}

$a=true;
$b=true;

if($a){
	echo'1';
}
echo "\n";
if(!$a){
	echo'2';
}
echo "\n";
if($a+$b){
	echo'3';
}
echo "\n";
if($a or true){
	echo'4';
}
echo "\n";
