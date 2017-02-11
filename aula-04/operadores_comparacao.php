<?php
$imovel[]='Casa';
$imovel[]='Apto';
$resultado[]=($imovel[0]==$imovel[1]);
$resultado[]=($imovel[0])===$imovel[1];
$resultado[]=($imovel[0])!=$imovel[1];
$resultado[]=($imovel[0])<>$imovel[1];
$resultado[]=($imovel[0])!==$imovel[1];
$resultado[]=($imovel[0])<$imovel[1];
$resultado[]=($imovel[0])>$imovel[1];
$resultado[]=($imovel[0])>=$imovel[1];
$resultado[]=($imovel[0])>=$imovel[1];
var_dump ($resultado);

//spaceship "<=>" verifica se é menor , maior ou igual ao mesmo tempo
$numeros[]=('93');
$numeros[]=('96');
$numeros[]=('93');
$result[]=($numeros[0]<=>$numeros[1]); // resultado="-1" (menor)
$result[]=($numeros[1]<=>$numeros[0]); // resultado="1"(maior)
$result[]=($numeros[0]<=>$numeros[2]); //resultado="0"(igual)
var_dump ($result);

