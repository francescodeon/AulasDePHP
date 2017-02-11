<?php
$escolha=('Hamburguer');

switch ($escolha):
	case 'Maçã':
		echo "Você escolheu $escolha, sua saúde agradeçe !\n\n" ;
		break;
	case "Hamburguer":
		echo "Você escolheu $escolha, mais cuidado com sua saúde !\n\n";
		break;
	default;
		echo "Desculpe mas $escolha item não está no nosso menu ! :(\n\n";
endswitch;



$i=0;
switch($i):
		case 0:
			print "i é igual a 0\n\n";
			break;
		case 1:
			print "i é igual a 1\n\n";
			break;
		case 2:
			print "i é igual a 2\n\n";
			break;
		default:
			print "i não é igual a 0,1 ou 2\n\n";
endswitch;


$letra='A';
switch($letra){
	case 'A':
	case'a':
	{
		echo 'Abacate';
		break;
	}
	case'B':
	case'b':
	{
		echo 'Bergamota';
		break;
	}
}
