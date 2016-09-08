<?php
	echo "1. estructura";
	for ($i=0; $i < 10; $i++) { 
		echo "$i.<br>";
		}

echo "2. estructura";
for ($i=1; ; $i++) { 
	# code...
	if ($i>10) {
		# code...
		break;
	}
	echo "$i.<br>";
}

echo "3. estructura";
$i =1;
for (;  ; ) { 
	# code...
	if ($i>10) {
		# code...
		break;
	}
	echo "$i<br>";
	$i++;
}

?>