<?php
$numeros= array('5','10','12','25','20');

foreach($numeros as $valor):
	if($valor%2==0):
		echo "$valor é par\n";
	else:
		echo "$valor é impar\n";
	endif;
endforeach;