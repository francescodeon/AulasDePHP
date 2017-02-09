<?php
function barber($type){
	echo "Você deseja o tipo de corte $type, sem problemas";
}
call_user_func('barber',"cogumelo");
call_user_func('barber',"raspado");