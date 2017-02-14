<?php
$cont=0;
function j_tick()
{	
	global $cont;
	$cont++;
}
declare(ticks=1);
register_tick_function('j_tick');

echo '1';echo '2';
echo '3';
echo '4';
echo '5';
echo '6';
echo '7';
echo '8';
echo '9';
echo '10';
echo '11';
echo $cont;