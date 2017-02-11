<?php
$salario =1020;
$tempo_servico=9;
$tem_reclamacoes=false;

if($salario>1000)
{
	if($tempo_servico>=12)
	{
		if($tem_reclamacoes!=true)
		{
			echo "parabéns, você foi promovido 1 \n";
		}
	}
}
if (($salario>1000)&&($tempo_servico>=12)&&($tem_reclamacoes!=true))
{
	echo 'parabéns você foi promovido 2';
}