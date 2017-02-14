<?php
$Offline=true;
$Online=false;
$Ocupado=false;


if ($Online):
	echo 'Online';
elseif ($Ocupado):
	echo 'Ocupado';
else:
	echo 'Offline';
endif;
