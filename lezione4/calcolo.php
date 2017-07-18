<?php
// Recupero i valori inseriti nel form
echo "<h1> Area:</h1>";
$area = $_POST['base'] * $_POST['altezza'] / 2;
echo $area;

var_dump($area);
var_dump($_POST);


