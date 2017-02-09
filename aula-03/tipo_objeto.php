<?php
class Caneta {
	var $cor;
	var $material;
	function riscar() {
		echo "Riscando...\n";
	}
}

$obj = new Caneta ();
$obj->cor = "Azul";
$obj->material = "Plastico";
$obj->riscar ();
print_r ( $obj );

$obj2 = new Caneta ();
$obj2->cor = "Vermelho";
$obj2->riscar ();
$obj2->material = "Ferro";
print_r ( $obj2 );
?>