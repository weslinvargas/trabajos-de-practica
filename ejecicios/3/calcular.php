<?php
	$pago = $_POST['pago'];
	$hora = $_POST['hora'];

	$salario=$pago*$hora;

	echo 'Salario por horas trabajadas: '.$salario.'<br/>';
	echo '<hr/>';
	echo '<h3>Deducciones</h3><br/>';
	echo 'IR: '.($salario*0.15).'<br/>';
	echo 'INSS: '.($salario*0.06);

?>