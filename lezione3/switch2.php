<?php

$colore = 'rosso';
switch ($colore) {
    case 'blu':
    case 'verde':
        echo "Il colore selezionato è un colore freddo";
        break;
    case 'giallo':
    case 'rosso':
    case 'arancione':
        echo "Il colore selezionato è un colore caldo";
        break;
    default:
        echo "Nessun colore corrispondente alla tua selezione";
        break;
}