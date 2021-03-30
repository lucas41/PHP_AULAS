<?php 


$idade = 17;
$numpessoa = 2;


if ($idade > 18 ) {
    echo "bem vindo";
} 
else if ($idade > 16 && $numpessoa > 1){
    echo "bem vindo você e seu acompanhante";
}
else {
    echo "volte novamente quando tiver 18 anos";
}


?>