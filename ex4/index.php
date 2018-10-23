<?php 
	$num = $_POST['num'];
	if ($num == 0) {

		echo "O número que você digitou é igual a 0.";

		# code...
	}elseif($num < 0){
		echo "O número que você digitou é positivo.";
	}
	else ($num > 0)
		echo "O número que você digitou é negativo.";
 ?>