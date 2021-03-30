<?php

$altura = 1.80;
$peso = 90;
$result = $peso / ($altura * $altura);


if ($result < 18.5) {
    echo "você está abaixo do peso";
} else if ($result < 24.9){
    echo "você está no peso normal";
} else if ($result < 29.9){
    echo "voce está com sobrepeso";
} else if ($result < 34.9){
    echo "Você tem obesidade grau 1";
} else if ($result < 39.9){
    echo "voce tem obesidade grau 2";
} else {
    echo "voce tem obesidade morbida";
}



?>