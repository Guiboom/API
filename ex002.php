<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <input type="submit" value="enviar">

    </form>
    
</body>
</html>


<?php
    /*vetor*/
    $nome = $_GET['nome'];
?>
<!-- var_dump($_SERVER) -->
<!-- #isset -->
<!-- O _GET é difetente do Get da requisição http -->