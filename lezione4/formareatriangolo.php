<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



    <h1>calcolo area del triangolo</h1>
	<form method="get" action="formareatriangolo.php">
		
		<?php 
			if( $_GET['base']==0 ) {
				echo "Inserisci la base<br>";
				echo '<input type="number" name="base"><br>';
			}
			else
				{
				echo "puoi cambiare la base<br>";
				echo '<input type="number" name="base" value="' . $_GET['base'] . '" ><br>';
			}

		?>
		Inserisci l'altezza<br>
		<input type="text" name="altezza"><br>
		
		<input type="submit" value="Invia Modulo">
	</form>

<?php
   echo "area = " . $_GET['base'] * $_GET['altezza'] / 2;
   ?>
</body>
</html>
