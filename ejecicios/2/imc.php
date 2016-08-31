<?php
	$peso = $_POST['peso'];
	$altura = $_POST['altura'];

	$masa = $peso / ($altura*$altura);

	echo 'La masa corporal es: '.$masa;

?>