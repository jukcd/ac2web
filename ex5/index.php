<?php 
	$idade = $_POST['idade'];
	if ($idade>=5 && $idade <=7) {
		echo "InfaNtil A!";
	}elseif ($idade <=10 ){
		echo "Infantil B!";
	}elseif ($idade<=13) {
		echo "Juvenil A!";
	}elseif ($idade <=17){
		echo "Juvenil B!"
	}else{
		echo "É muito criança para nadar!"
	}
 ?>