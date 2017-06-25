<?php
$nome = "Paolo";
$cognome = "Giampaoli";
$colorepreferito = "rosso";

?>
<!DOCTYPE html>
<html>
<head>
	<title>If esempio 2</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Esempio</h1>
	<div>
		<?php

		if ($nome == "Paolo" && $cognome == "Giampaoli") {
			echo "<div class='rosso'>";
			echo "Il mio colore preferito è $colorepreferito";
		}

		elseif ($nome == "Paolo" && $cognome == "Gatti") {
			echo "<div class='rosso'>";
			echo "Salve signor Gatti, io cercavo Giampaoli, non sei tu!";
		}

		elseif ($colorepreferito == "rosso") {
			echo "<div class='rosso'>";
			echo "Il colore $colorepreferito piace molto a Paolo Giampaoli!";
		}
		echo "</div>";

		?>
	</div>
</body>
</html>


