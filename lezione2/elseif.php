<!DOCTYPE html>
<html>
<head>
	<title>Elseif esempio 2</title>
</head>
<body>

	<h1>Esempio</h1>
	<div>
	<?php
	$colore = "giallo";

	if ($colore == "blu") {
		echo "<div style='color:blue'>";
		echo "Il colore selezionato è il blu";
	}
	elseif ($colore == "giallo") {
		echo "<div style='color:yellow'>";
		echo "Il colore selezionato è il giallo";
	}
	elseif ($colore == "verde") {
		echo "<div style='color:green'>";
		echo "Il colore selezionato è il verde";
	}
	elseif ($colore == "rosso") {
		echo "<div style='color:red'>";
		echo "Il colore selezionato è il rosso";
	}
	elseif ($colore == "arancione") {
		echo "<div style='color:orange'>";
		echo "Il colore selezionato è il arancione";
	}
	else {
		echo "<div style='color:black'>";
		echo "Nessun colore corrispondente alla tua selezione";
	}
	echo "</div>";

	
	?>
	</div>
</body>
</html>


