<?php
/* Erro de arquivo intencional */
$my_file = @file ('arquivo_nao_existente') or
die ("Falha abrindo arquivo: '$php_errormsg'"); //função "die" encerra a execução do código

// Isto funciona para qualquer expressão, não apenas para funções:
$value = @$cache[$key];
// você não receberá nenhum aviso se a chave $key não existir.

