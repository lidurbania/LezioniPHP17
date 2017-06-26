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
</head>
<body>

	<h1>Calcolo Area del Triangolo</h1>
	<div>
		<?php
		if ($areatriangolo > $valoreminimoarea) {
			echo "<div style='color:green'>";
			echo "L'area del triangolo è $areatriangolo, quindi è maggiore di $valoreminimoarea";

		}
		else {
			echo "<div style='color:red'>";
			echo "L'area è minore di $valoreminimoarea";
		}
		echo "</div>";
		?>
	</div>
</body>
</html>


