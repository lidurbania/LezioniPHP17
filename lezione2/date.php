<?php



// La data Attuale
echo "Ora è " . date('l d F Y') . "</br>";



//La data tra 12 giorni
$timestamp = strtotime("+12 day");
echo "Tra dodici giorni sarà " . date('l d F Y', $timestamp) . "</br>";






















/*
setlocale(LC_ALL, 'ita');

echo "<h1>Oggi è il giorno " . strftime("%A %d %B %Y") . "</h1></br>";

echo "<h1>Tra 12 giorni è " . strftime("%A %d %B %Y", $timestamp) . "</h1></br>";
*/