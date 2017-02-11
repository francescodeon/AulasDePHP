<?php
$numero=0;
while($numero<=100)
{
	echo "$numero\n";
	$numero++;
}





$numero=0;
while($numero<=100 && $numero <110)
{
	echo '<input type="text" name="'.$numero.'"/>';
	$numero++;
}