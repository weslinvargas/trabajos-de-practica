


<?php
//declaracion de vaiables

$i=1; $num3=0; $num2y3=0; $num2=0;

while ($i <= 10) 
{
	
	if  (($i % 2==0)  and ($i % 3==0)){
		echo "$i es multiplo de dos y tres.<br>";
		$num2y3+=1;

	}elseif ($i%2==0) {
	
		echo "$i es multiplo de dos.<br>";
		$num2+=1;
	}elseif ($i%3==0) {
	
		echo "$i es multiplo de tres.<br>";
		$num3+=1;
	}else 
	 	echo "$i no es multiplo de dos ni de tres.<br>";

	$i+=1;

}
   echo "_____________________________________________________________.<br>";
   echo "$num2y3 son multiplos de dos y tres.<br>";
   echo "$num3 son multiplos de tres.<br>";
   echo "$num2 son multiplos de  dos.<br>";
   echo "los restantes".(10-$num2y3-$num2-$num3)." numeros no son multiplos de dos ni de tres.<br>";

/*$I=1;
	DO{

	
	print ($I);

	} WHILE($I=<10);
*/
?>