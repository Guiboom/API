<?php
if(isset($_GET['nome']) && $_GET['nome'] != ""){
    $nome = $_GET['nome'];
    echo "Saudações ".$nome;
} else {
    echo "Saudações Visitante";
}
/* ?nome=variavelnome */
?>