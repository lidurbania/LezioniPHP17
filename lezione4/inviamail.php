<?php
// Recupero i valori inseriti nel form
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$hobby = $_POST['hobby'];


// stampo gli elementi
	echo "<h1>Ecco cosa mi hai inviato</h1>".
		 "</br>Il mio Nome:<b>" . $nome."</b>".
		 "</br>La mia email:<b>" .$email."</b>".
		 "</br>Il mio hobby:<b>" .$hobby."</b>".
		 "</br>Il messaggio:</br><i>" .$msg . "</i>";


