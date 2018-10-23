<?php 
	$salario = $_POST['salario'];
	$carrosvendidos =  $_POST['carrosvendidos'];
	$vendas = $_POST['vendas'];
	$comissaoporcarro = $_POST['comissao'];
	$comissao = ($carrosvendidos*$comissaoporcarro) + $salario+($vendas*0.05);

	echo "O Salario final do vendedor é R$:" . $comissao;







 ?>