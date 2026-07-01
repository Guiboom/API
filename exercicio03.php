<?php
$nota1 = 6;
$nota2 = 10;
$nota3 = 5;

$media = ($nota1+$nota2+$nota3)/3;
if ($media >=7){
    echo "aprovado";
}elseif ($media >=5){
    echo "recuperação";
}else{
    echo "reprovado";
}

?>