<?php
$marcas = array (); // recebe um array vazio
$marcas [] = 'GM'; // valor 'GM' é atribuido a posição disponivel no contador [0] array
$marcas [] = 'Fiat'; // valor 'Fiat' é atribuido na posição do contador [1] array
$marcas ['Audi'] = 'A4'; // nova chave criada manualmente de forma associativa
$marcas [3] = 'VW'; // valor é atrubuido na posição [3] do contador
$marcas [] = 'Renault'; // valor atribuido na posição do contador [4]
$marcas [2] = 'Dodge'; // valor atribuido na posição do contador [2]
$marcas [] = 'JAC'; // valor atribuido na posição do contador [5]

print_r ( $marcas );
?>