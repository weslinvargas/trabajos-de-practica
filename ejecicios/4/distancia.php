<?php

	$distancia=$_POST['dis'];

	echo 'Conversiones';
	echo '<hr>';
	if(!empty($_POST['cm'])){
		$cm=$_POST['cm'];
		echo $distancia.' cm';
		echo '<br>';
	}

	if (!empty($_POST['pul'])){
		$pul=$_POST['pul'];
		echo ($distancia/2.5).' pulg';
		echo '<br>';
	}
	if(!empty($_POST['mt'])){
		$mt=$_POST['mt'];
		echo ($distancia/100).' mts';
		echo '<br>';
	}
	if(!empty($_POST['km'])){
		$km=$_POST['km'];
		echo ($distancia/100000).' Km';
	}



	

?>