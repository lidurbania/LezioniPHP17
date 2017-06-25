<?php
$valoreminimoarea = 12;
$altezza = 5;
$base =6;
$areatriangolo = $base*$altezza/2;
?>

<!DOCTYPE html>
<html>
<head>
	<title>If esempio 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1>Calcolo Area del Triangolo</h1>
	<div>
		<?php
		if ($areatriangolo > $valoreminimoarea) {
			echo "<div class='verde'>";
			echo "L'area del triangolo è $areatriangolo, quindi è maggiore di $valoreminimoarea";

		}
		else {
			echo "<div class='rosso'>";
			echo "L'area è minore di $valoreminimoarea";
		}
		echo "</div>";
		?>
	</div>
</body>
</html>


