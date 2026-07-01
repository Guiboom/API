<?php
$nome = "Guilherme";
$idade = 17;
$cidade = "Rio do Sul";

echo "Olá! meu nome é ".$nome." tenho ".$idade." anos e moro em ".$cidade;

if($nome == "Guilherme"){
    echo "Sim";
} else {
    echo "não";
}

for($i = 0; $i <= 10; $i++){
    echo "<br>".$i;
    echo $i;
}

?>