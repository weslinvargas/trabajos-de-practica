<?php
	$cantidad = $_POST['dinero'];
	$conversion = $_POST['conversion'];

	if ($conversion=="cordoba"){
		$calculo=$cantidad/29.40;
		echo 'La conversion de cordoba a dolares: '.$calculo;
	}else{
		$calculo=$cantidad*29.40;
		echo 'La conversion de dolares a cordoba: '.$calculo;
	}


?>