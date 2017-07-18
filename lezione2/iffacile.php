<?php

$numero = 113;
echo "Adesso controllo $numero :</br>";
echo "$numero e' ";

if( $numero < 10 )
 	echo "piccolo";
else
{
	if($numero < 100)
		echo "medio";
	else 
		echo "grande";
}

echo "</br>ciao";
echo 
  "</br> davvero ciao";
?>