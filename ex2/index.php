<?php
	$numeleitores = $_POST['NumEleitores'];
	$votosnulos   = $_POST['VotosNuls'];
	$votosvalidos = $_POST['VotosVal'];
	$votosbrancos = $_POST['VotosBran'];

	if ($votosvalidos+$votosbrancos+$votosnulos != $numeleitores) {
		echo "A quantidade de eleitores é diferente da quantidade de votos.";
		# code...
	}else{
		$pctvalidos =  ($votosvalidos*100)/$numeleitores;
		$pctnulos = ($votosnulos*100)/$numeleitores;
		$pctbrancos = ($votosbrancos*100)/$numeleitores;

		echo "A porcentagem de votos validos é igual a: " . number_format($pctvalidos,2) .'% <br>A porcentagem de votos nulos é igual a: '.number_format($pctnulos,2) . '% <br> A porcentagem de votos brancos é igual a: ' . number_format($pctbrancos,2) . '%';
	
	}
 ?>