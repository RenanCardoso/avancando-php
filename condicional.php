<?php
/*
//CONDIÇÕES
$maior = 10;
$menor = 1;
//CONDIÇÕES COM TERNÁRIO, SE $maior FOR MAIOR QUE $menor, ENTAO VENCEDOR = $maior, SENÃO VENCEDOR = $menor
$vencedor = $maior > $menor ? $maior : $menor;
echo "O maior número é $vencedor<br>";

$chovendo = true;

if($chovendo){
    echo "Vou ficar em casa!";
} else {
    echo "Vou sair para rua!";
}


/* LAÇO WHILE
$numero = 8;
$contador = 1;

while ($contador <= 10) {

    $tabuada = $numero * $contador;
    echo "tabuada do 8 é: $numero x $contador = ".($contador * $numero)."<br>";
        
    $contador++;
}
LAÇO FOR COM ARRAY SIMPLES
$frutas = [
    'Banana',
    'Maçã',
    'Goiaba',
    'Pêra'
];

for($i = 0; $i < count($frutas); $i++){
    echo $frutas[$i]."<br>";
};

*/

//LAÇO FOREACH COM ARRAY SIMPLES

$planetas = [
    'Mercúrio',
    'Vênus',
    'Terra',
    'Marte',
    'Júpiter',
    'Saturno',
    'Urano',
    'Netuno'
];

foreach($planetas as $planeta){
    echo "$planeta<br>";
};


