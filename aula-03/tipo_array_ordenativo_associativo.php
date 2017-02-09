<?php
/*	Torna-se ordenativo associativo no momento em que colocamos um novo elemento no array associativo 
 *	sem definição de chave.
 */

$carros=array('GM'=>'Corsa','Fiat'=>'Palio','Audi'=>'A4','Fiesta');
echo $carros[0];	//resultado='Fiesta'

$planetas=array('0'=>'Terra','Marte','1'=>'Saturno',1=>'Plutão','5'=>'x','Sol');
print_r($planetas);
echo $planetas[1];	//resultado='Pltuão';

//	Quando damos uma chave de forma associativa com númerais modificamos o valor do contador ordenativo.


