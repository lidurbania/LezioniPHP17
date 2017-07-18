<?php


$partecipanti = [
    'Simone' => [
        'anno' => '1986',
        'sesso' => 'M',
        'email' => 'test@notreal.com'
    ], 
    'Gabriele' => [
        'anno' => '1991',
        'sesso' => 'M',
        'email' => 'test2@notreal.com'
    ],
    'Josephine' => [
        'anno' => '1985',
        'sesso' => 'F',
        'email' => 'test3@notreal.com'
    ],
    'giulio'=>['hobby'=>'droni', 'cibopreferito'=>"pasta"]
];

//echo "Prima di paolo";

//var_dump($partecipanti);


$partecipanti['Paolo'] = [
'nascita' => 'Peglio',
'anno' => 1948
];



$partecipanti['Paolo']['Hobby']="Fotografia";

var_dump($partecipanti);

//print_r($partecipanti);

unset ($partecipanti["Paolo"]);

//echo "</br><h3>Elenco partecipanti senza simone</h3></br>";

//print_r($partecipanti);

var_dump($partecipanti);
?>